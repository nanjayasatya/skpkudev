<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// NEWS CONTROLLER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// SEMENTARA DISCONTINUED

//SENTRY ERROR REPORTING
Sentry\init(['dsn' => 'https://4a7f7e1d5885447288e0031d20183b17@o1054582.ingest.sentry.io/6040032' ]);

class News extends CI_Controller
{
    //Construct untuk load Helper, Model dan External Function.
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('post/index');
            $this->load->view('templates/footer');
        } else {
            $title = $this->input->post('title', TRUE);
            $contents = $this->input->post('contents', TRUE);

            $data = [
                'title' => $title,
                'contents' => $contents
            ];

            $this->db->insert('news', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Article Added!</div>');
            redirect('post/daftarPost');
        }
    }

    public function daftarPost()
    {
        $data['daftar'] = $this->db->get('news')->result_array();
        $this->load->view('templates/header');
        $this->load->view('post/daftar', $data);
        $this->load->view('templates/footer');
    }

    public function detailPost($id)
    {
        $data['detail'] = $this->db->get_where('news', ['id' => $id])->row_array();
        $this->load->view('templates/header');
        $this->load->view('post/detail', $data);
        $this->load->view('templates/footer');
    }

    // Upload image summernote
    function upload_image()
    {
        if (isset($_FILES["image"]["name"])) {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 800;
                $config['new_image'] = './assets/images/' . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url() . 'assets/images/' . $data['file_name'];
            }
        }
    }

    // Delete image Summernote
    function delete_image()
    {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if (unlink($file_name)) {
            echo 'File Delete Successfully';
        }
    }
}
