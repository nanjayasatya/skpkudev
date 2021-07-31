<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// USER CONTROLLER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

class User extends CI_Controller
{
    //Construct untuk load Helper, Model dan External Function.
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('News_model', 'news');
        $this->load->model('SKPDatabase_model', 'skp');
        $this->load->model('TelegramBot_model', 'telbot');
        is_logged_in();
    }

    //Function untuk Kirim Email.
    private function _inputSKPsendEmail()
    {
        $datauser = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $email = 'internalbemfk@gmail.com';
        $message = '<br><h1>Pengajuan Validasi SKP</h1></br> 
                    <br><h2>Data Validasi</h2></br>
                    <br><p class="mt-1">Nama Mahasiswa : ' . $this->input->post('name') . '</p></br>
                    <br><p class="mt-1">NPM : ' . $this->input->post('npm') . '</p></br>
                    <br><p class="mt-1">Keterangan : ' . $this->input->post('event_data') . '</p></br>
                    <br><p class="mt-1">Posisi     : ' . $this->input->post('event_posisi') . '</p></br>
                    <br><p class="mt-1">Tahun      : ' . $this->input->post('event_year') . '</p></br>
                    <br><p class="mt-1">Bobot      : ' . $this->input->post('bobot') . '</p></br>
                    <br><h2>Saat ini sedang Menunggu Validasi</h2></br>
                    <br><p><a href="https://skpku.bemfkuwks.com/">Login</a> untuk melakukan validasi SKP.</p></br>';
        $config = [
            'protocol' => 'ssmtp',
            'smtp_host' => 'ssl://mail.bemfkuwks.com',
            'smtp_user' => 'skpku@bemfkuwks.com',
            'smtp_pass' => 'Bemhiuwksmaju!',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('skpku@bemfkuwks.com', 'SKP-KU BEM FK UWKS');
        $this->email->to($email);
        $this->email->subject('Informasi Pengajuan Validasi SKP : ' . $this->input->post('npm') . ' ' . '(' . $this->input->post('event_data') . ')');
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
            echo "Berhasil";
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function InputSKPSendTelegramMSGSKP()
    {
        date_default_timezone_set('Asia/Bangkok');
        $MSG = "&#10071; Informasi Validasi SKP Baru
        \n&#128273 NPM: " . $this->input->post('npm') . "
        \n&#128221; Keterangan: " . $this->input->post('event_data') . "
        \n&#127941; Posisi: " . $this->input->post('event_posisi') . "
        \n&#128345; Tahun: " . $this->input->post('event_year') . "
        \n&#128308; Bobot: " . $this->input->post('bobot') . "
        \n&#128345; Waktu pengajuan: " . date("d-M-Y h:i:s A") . "
        \nSedang menunggu untuk di validasi oleh pihak INTERNAL.";
        $SEPARATOR = '====================';
        $this->telbot->SendTelegramMSGSKP($SEPARATOR);
        $this->telbot->SendTelegramMSGSKP($MSG);
    }

    //Halaman Home (Data Mahasiswa)
    public function profile()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/user/user_sidebar', $data);
        $this->load->view('templates/user/user_topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }

    public function index()
    {
        $data['title'] = 'Homepage';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['userfulldata'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/user/user_sidebar', $data);
        $this->load->view('templates/user/user_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function pdfqrcodegenerate()
    {
        $this->load->library('encryption');
        $this->load->library('PHPQR');
        $npm = $this->session->userdata('npm');
        $final_npm = $this->encryption->encrypt($npm);
        QRcode::png($final_npm, 'assets/user_directory/' . $npm . '/' . $npm . '.png');
    }

    //Export SKP dalam bentuk PDF. 
    public function skpexport()
    {
        $this->pdfqrcodegenerate();
        $npm = $this->session->userdata('npm');
        $countskp = $this->skp->CountAllSKPList();
        if ($countskp['COUNT(id)'] < 2) {
            $this->session->set_flashdata('printgagal', '<div class="alert alert-danger" role="alert">
                        Data SKP A masih kurang!</div>');
            redirect('user/skpdatabase');
        } else {
            $data['title'] = 'SKP Export';
            $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
            $skpdataA = $this->skp->GetListSKPDataA();
            $skpsumdataA = $this->skp->SumTotalSKPUserA();
            $skpdataB = $this->skp->GetListSKPDataB();
            $skpsumdataB = $this->skp->SumTotalSKPUserB();
            $skp_req = $this->skp->GetSKPRequirements();
            $bem_status = $this->db->get('bem_status', ['id' => 1])->result_array();
            $ia = 1;
            $ib = 1;

            //Kalo mau ubah format PDFnya lewat sini ya :)
            //Liat Documentationnya FPDF.
            //Load Library PDF.
            $this->load->library('PDFE');
            $pdf = new FPDF;


            //Page Setting.
            $pdf->SetTitle('Total Data SKP : ' . $this->session->userdata('name') . ' (' . $this->session->userdata('npm') . ')');
            $pdf->AliasNbPages();
            $pdf->SetMargins(10, 53, 10);
            $pdf->SetAutoPageBreak(true, 40);
            $pdf->AddFont('Metropolis', '', 'metropolis.regular.php');
            $pdf->AddFont('Metropolis-Bold', '', 'metropolis.bold.php');
            //Lembar Daftar SKP.
            $pdf->AddPage('L', 'A4', 0);
            $datauser =  $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->result_array();
            $pdf->SetFont('Metropolis-Bold', '', 15);
            //Identitas.
            foreach ($datauser as $du) {
                $pdf->Cell(276, 8, 'Daftar Total SKP', 0, 1, 'C');
                $pdf->Ln(5);
                $pdf->Image('assets/user_directory/' . $npm . '/' . $npm . '.png', 230, 65, 38, 38, 'PNG');
                $pdf->SetFont('Metropolis', '', 12);
                $pdf->Cell(30, 10, 'Mahasiswa', 0, 0, 'L');
                $pdf->Cell(10, 10, ':', 0, 0, 'L');
                $pdf->Cell(10, 10, $du['name'], 0, 0, 'FJ');
                $pdf->Ln();
                $pdf->Cell(30, 10, 'NPM', 0, 0, 'L');
                $pdf->Cell(10, 10, ':', 0, 0, 'L');
                $pdf->Cell(10, 10, $du['npm'], 0, 0, 'FJ');
                $pdf->Ln();
                $pdf->Cell(30, 10, 'Kelas', 0, 0, 'L');
                $pdf->Cell(10, 10, ':', 0, 0, 'L');
                $pdf->Cell(10, 10, $du['angkatan'] . $du['kelas'], 0, 0, 'FJ');
                $pdf->Ln(30);
            }
            //Tabel SKP A.
            $pdf->SetFont('Metropolis-Bold', '', 14);
            $pdf->Cell(276, 5, 'SKP A', 0, 0, 'C');
            $pdf->Ln(10);
            $pdf->SetFont('Metropolis-Bold', '', 12);
            $pdf->Cell(10, 10, 'No', 1, 0, 'C');
            $pdf->Cell(190, 10, 'Keterangan', 1, 0, 'C');
            $pdf->Cell(15, 10, 'Tahun', 1, 0, 'C');
            $pdf->Cell(40, 10, 'Posisi', 1, 0, 'C');
            $pdf->Cell(15, 10, 'Bobot', 1, 0, 'C');
            $pdf->Ln();
            foreach ($skpdataA as $ska) {
                $pdf->SetFont('Metropolis', '', 12);
                $pdf->Cell(10, 10, $ia++, 1, 0, 'C');
                $pdf->Cell(190, 10, $ska['event'], 1, 0, 'C');
                $pdf->Cell(15, 10, $ska['tahun'], 1, 0, 'C');
                $pdf->Cell(40, 10, $ska['posisi'], 1, 0, 'C');
                $pdf->Cell(15, 10, $ska['bobot'], 1, 0, 'C');
                $pdf->Ln();
            }
            $pdf->Ln(20);
            //Tabel SKP B.
            $pdf->SetFont('Metropolis-Bold', '', 14);
            $pdf->Cell(276, 5, 'SKP B', 0, 0, 'C');
            $pdf->Ln(10);
            $pdf->SetFont('Metropolis-Bold', '', 12);
            $pdf->Cell(10, 10, 'No', 1, 0, 'C');
            $pdf->Cell(190, 10, 'Keterangan', 1, 0, 'C');
            $pdf->Cell(15, 10, 'Tahun', 1, 0, 'C');
            $pdf->Cell(40, 10, 'Posisi', 1, 0, 'C');
            $pdf->Cell(15, 10, 'Bobot', 1, 0, 'C');
            $pdf->Ln();
            foreach ($skpdataB as $skb) {
                $pdf->SetFont('Metropolis', '', 12);
                $pdf->Cell(10, 10, $ib++, 1, 0, 'C');
                $pdf->Cell(190, 10, $skb['event'], 1, 0, 'C');
                $pdf->Cell(15, 10, $skb['tahun'], 1, 0, 'C');
                $pdf->Cell(40, 10, $skb['posisi'], 1, 0, 'C');
                $pdf->Cell(15, 10, $skb['bobot'], 1, 0, 'C');
                $pdf->Ln();
            }
            $pdf->SetFont('Metropolis-Bold', '', 10);
            $pdf->Ln(5);
            $pdf->SetTextColor(255, 0, 0);
            $pdf->Cell(276, 5, '*Jika ada kesalahan data mohon segera menghubungi Departemen INTERNAL BEM FK UWKS*', 0, 0, 'C');
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Ln(10);
            $pdf->Cell(276, 5, 'SKP A diinput oleh Departemen INTERNAL BEM FK UWKS.', 0, 0, 'C');
            $pdf->Ln(5);
            $pdf->Cell(276, 5, 'SKP B diinput oleh Mahasiswa dan di validasi oleh Departemen INTERNAL BEM FK UWKS.', 0, 0, 'C');
            $pdf->Ln(20);
            //
            //PEMISAH 
            //  
            //Lembar Pengesahan.
            $pdf->SetAutoPageBreak(true, 20);
            $pdf->AddPage('L', 'A4', 0);
            $pdf->SetFont('Metropolis-Bold', '', 15);
            //Total SKP.
            //Total SKP A.
            $pdf->SetFont('Metropolis-Bold', '', 16);
            $pdf->Cell(270, 8, 'Lembar Pengesahan', 0, 1, 'C');
            $pdf->Ln(5);
            $pdf->SetFont('Metropolis', '', 14);
            $pdf->Cell(105, 10, '', 0, 0, 'C');
            $pdf->Cell(60, 10, 'Total Perhitungan SKP', 0, 0, 'C');

            $pdf->Ln();
            foreach ($skpsumdataA as $suma) {
                if (empty($suma)) {
                    $suma = "0";
                }
                $pdf->SetFont('Metropolis-Bold', '', 14);
                $pdf->Cell(105, 10, '', 0, 0, 'C');
                $pdf->Cell(40, 10, 'SKP A', 1, 0, 'C');
                $pdf->Cell(20, 10, $suma, 1, 0, 'C');
                $pdf->Ln(10);
            }
            //Total SKP B.
            foreach ($skpsumdataB as $sumb) {
                if (empty($sumb)) {
                    $sumb = "0";
                }
                $pdf->Cell(105, 10, '', 0, 0, 'C');
                $pdf->Cell(40, 10, 'SKP B', 1, 0, 'C');
                $pdf->Cell(20, 10, $sumb, 1, 0, 'C');
                $pdf->Ln(10);
            }

            //Total Seluruh SKP.
            $pdf->Cell(105, 10, '', 0, 0, 'C');
            $pdf->SetFont('Metropolis', '', 14);
            $pdf->Cell(60, 10, 'Total Seluruh SKP', 0, 0, 'C');
            //$pdf->Cell(5, 10, ':', 0, 0, 'L');
            $pdf->SetFont('Metropolis-Bold', '', 12);
            $pdf->Ln();
            $pdf->Cell(105, 10, '', 0, 0, 'C');
            $pdf->Cell(60, 10, $suma + $sumb . ' ' . '/ ' . $skp_req['skp_min'], 1, 0, 'C');

            //Atur minimal SKP Poin yang mencukupi
            if ($suma + $sumb <= $skp_req['skp_min']) {
                $setcolor = $pdf->SetTextColor(255, 0, 0);
                $infoskp = '*Total SKP Belum mencukupi*';
            } else {
                $setcolor = $pdf->SetTextColor(8, 175, 36);
                $infoskp = '*Total SKP Sudah mencukupi*';
            }
            $pdf->Ln(5);
            $setcolor;
            $pdf->Cell(105, 10, '', 0, 0, 'C');
            $pdf->Ln();
            $pdf->Cell(105, 10, '', 0, 0, 'C');
            $pdf->Cell(60, 10, $infoskp, 0, 0, 'C');
            $pdf->Ln(10);
            //TTD BEM (Ganti Properties TTD dan STAMPEL di Database ya)
            foreach ($bem_status as $bs) {
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Cell(275, 10, 'Mengetahui,', 0, 0, 'C');
                $pdf->Ln(5);
                $pdf->Cell(275, 10, 'Gubernur BEM FK UWKS ', 0, 0, 'C');
                $pdf->Ln(30);
                $pdf->Image($bs['gubem_ttd'], 140, 139, 14);
                $pdf->Image($bs['gubem_stampel'], 140, 137, 30);
                $pdf->SetFont('Metropolis', '', 12);
                $pdf->Cell(275, 10, $bs['gubem_name'], 0, 0, 'C');
                $pdf->Ln(5);
                $pdf->Cell(275, 10, 'NPM : ' . $bs['gubem_npm'], 0, 0, 'C');
                $pdf->SetFont('Metropolis', '', 9);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Ln(6);
                $pdf->Cell(80, 5, 'SKP-KU Export on ' . date("F, \ j Y"), 0, 0, 'C');
            }

            //Footer PDF.
            //$pdf->SetY(190);
            //$pdf->SetFont('Arial', 'B', 10);
            //$pdf->Cell(0, 5, 'Halaman ' . $pdf->PageNo() . '/{nb}', 0, 0, 'C');
            $npmoutput = $this->session->userdata('npm');
            $pdf->Output('I', 'PrintTotalSKP_' . $npmoutput . '.pdf');
        }
    }



    //Halaman List Berita.
    public function listPost()
    {
        $data['title'] = 'Berita';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        //$data['daftar'] = $this->db->get('news')->result_array(); - Method Lama

        //Load Library di Autoload
        //Pagination Berita
        //Config
        $config['base_url'] = '/sistem/user/listPost';
        $config['total_rows'] = $this->news->countAllNews();
        $config['per_page'] = 2;

        //Styling
        $config['full_tag_open'] = '<nav aria-label="News navigation"> <ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul> </nav> ';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = ' <li class="page-item">';
        $config['last_tag_close'] = ' </li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = ' <li class="page-item">';
        $config['prev_tag_close'] = ' </li>';

        $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = ' </a></li>';

        $config['num_tag_open'] = ' <li class="page-item">';
        $config['num_tag_close'] = ' </li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->Initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data['daftar'] = $this->news->getNewsPage($config['per_page'], $data['start']);
        $this->load->view('templates/news_header', $data);
        $this->load->view('templates/user/user_sidebar', $data);
        $this->load->view('templates/user/user_topbar', $data);
        $this->load->view('user/daftar', $data);
        $this->load->view('templates/footer');
    }

    //Halaman Detail Berita.
    public function detailPost($id)
    {
        $data['title'] = 'News Manager';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['detail'] = $this->db->get_where('news', ['id' => $id])->row_array();
        $this->load->view('templates/news_header', $data);
        $this->load->view('templates/user/user_sidebar', $data);
        $this->load->view('templates/user/user_topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    //Halaman SKP Database.
    public function skpdatabase()
    {
        $data['title'] = 'SKP Database';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $skpdata['skpuserdataA'] = $this->skp->GetListSKPDataA();

        $skpdata['sumskpdataA'] = $this->skp->SumTotalSKPUserA();

        $skpdata['skpuserdataB'] = $this->skp->GetListSKPDataB();

        $skpdata['sumskpdataB'] = $this->skp->SumTotalSKPUserB();

        $data['userDatabase'] = $this->db->get('user')->result_array();

        $data['skp_req'] = $this->skp->GetSKPRequirements();

        $buttonprint = '<a class="btn btn-dark btn-block mb-5" href="user/skpexport" target="_blank">Print Total SKP</a>';

        /* $this->db->where('id !=', 1);
        $this->db->where('id !=', 3); */

        $this->load->view('templates/header', $data);
        $this->load->view('templates/user/user_sidebar', $data);
        $this->load->view('templates/user/user_topbar', $data);
        $this->load->view('user/skpdatabase', $skpdata);
        $this->load->view('templates/footer');
    }

    //Function Pendukung Input SKP

    //Fetch Event Org Data
    public function getEventOrg()
    {
        $eventorg = $this->db->get('event_org')->result_array();
    }
    //Fetch Event Tahun Data
    public function getEventTahun()
    {
        $eventyear = $this->db->get('event_year')->result_array();
        echo json_encode($eventyear);
    }
    //Fetch All Event Data
    public function getEventData()
    {
        $pelaksana = $this->input->post('pelaksana');
        $tahun = $this->input->post('tahun');
        $eventdata =  $this->db->get_where('event_data', ['pelaksana' => $pelaksana, 'tahun' => $tahun])->result_array();
        echo json_encode($eventdata);
    }

    public function daftarvalidasi()
    {
        $data['title'] = 'Validasi SKP B';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $skpdata['skpuserpendingvalidation'] = $this->skp->GetListValidationUserData();
        $skpdata['eventorg'] = $this->db->get('event_org')->result_array();
        $skpdata['eventyear'] = $this->db->get('event_year')->result_array();
        $skpdata['eventposisi'] = $this->db->get('event_position')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/user/user_sidebar', $data);
        $this->load->view('templates/user/user_topbar', $data);
        $this->load->view('user/daftarvalidasi', $skpdata);
        $this->load->view('templates/footer');
    }

    //Halaman Input SKP.
    public function inputskp()
    {
        $data['title'] = 'Input dan Validasi SKP B';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $skpdata['skpuserpendingvalidation'] = $this->skp->GetListValidationUserData();
        $skpdata['eventorg'] = $this->db->get('event_org')->result_array();
        $skpdata['eventyear'] = $this->db->get('event_year')->result_array();
        $skpdata['eventposisi'] = $this->db->get('event_position')->result_array();

        $this->form_validation->set_rules('event_data', 'Event_data', 'required|trim', [
            'required' => 'Kegiatan harus dipilih!'
        ]);

        $this->form_validation->set_rules('event_year', 'Event_year', 'required|trim', [
            'required' => 'Tahun harus dipilih!'
        ]);

        $this->form_validation->set_rules('event_posisi', 'Event_posisi', 'required|trim', [
            'required' => 'Posisi harus dipilih!'
        ]);

        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/user/user_sidebar', $data);
            $this->load->view('templates/user/user_topbar', $data);
            $this->load->view('user/inputskp', $skpdata);
            $this->load->view('templates/footer');
        } else {

            $upload_image = $_FILES['image']['name'];
            if (empty($upload_image)) {
                $this->form_validation->set_rules('image', 'Image', 'required', [
                    'required' => 'Bukti SKP harus diisi!'
                ]);
            } else {
                if ($upload_image) {
                    $config['allowed_types'] = 'jpg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/user_directory/' . $this->session->userdata('npm');
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');
                        $skp_proof = $new_image;
                        $data = [
                            'name' => $this->input->post('name'),
                            'npm' => $this->session->userdata('npm'),
                            'tipe' => 'B',
                            'event' => $this->input->post('event_data'),
                            'tahun' => $this->input->post('event_year'),
                            'posisi' => $this->input->post('event_posisi'),
                            'bobot' => $this->input->post('bobot'),
                            'skp_proof' => $skp_proof,
                            'status' => '0'
                        ];
                        $this->db->insert('validation_skp_user_pending', $data);
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data berhasil diinput, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
                        //Fungsi Email dimatikan dulu, cari solusi lain biar gak berat
                        //$this->_inputSKPsendEmail();
                        $this->InputSKPSendTelegramMSGSKP();
                        redirect('user/daftarvalidasi');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Data gagal diinput, dimohon input ulang data beserta bukti kegiatan/keterangan!</div>');
                        echo $this->upload->display_errors();
                    }
                }
            }
        }
    }

    //Halaman Input SKP Manual
    public function inputskpmanual()
    {
        $data['title'] = 'Input dan Validasi SKP B';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $skpdata['skpuserpendingvalidation'] = $this->skp->GetListValidationUserData();
        $skpdata['eventorg'] = $this->db->get('event_org')->result_array();
        $skpdata['eventyear'] = $this->db->get('event_year')->result_array();
        $skpdata['eventposisi'] = $this->db->get('event_position')->result_array();

        $this->form_validation->set_rules('event_data', 'Event_data', 'required|trim', [
            'required' => 'Kegiatan harus dipilih!'
        ]);

        $this->form_validation->set_rules('event_year', 'Event_year', 'required|trim', [
            'required' => 'Tahun harus dipilih!'
        ]);

        $this->form_validation->set_rules('event_posisi', 'Event_posisi', 'required|trim', [
            'required' => 'Posisi harus dipilih!'
        ]);

        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/user/user_sidebar', $data);
            $this->load->view('templates/user/user_topbar', $data);
            $this->load->view('user/inputskpmanual', $skpdata);
            $this->load->view('templates/footer');
        } else {

            $upload_image = $_FILES['image']['name'];
            if (empty($upload_image)) {
                $this->form_validation->set_rules('image', 'Image', 'required', [
                    'required' => 'Bukti SKP harus diisi!'
                ]);
            } else {
                if ($upload_image) {
                    $config['allowed_types'] = 'jpg|png|pdf';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/user_directory/' . $this->session->userdata('npm');
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');
                        $skp_proof = $new_image;
                        $data = [
                            'name' => $this->input->post('name'),
                            'npm' => $this->session->userdata('npm'),
                            'tipe' => 'B',
                            'event' => $this->input->post('event_data'),
                            'tahun' => $this->input->post('event_year'),
                            'posisi' => $this->input->post('event_posisi'),
                            'bobot' => $this->input->post('bobot'),
                            'skp_proof' => $skp_proof,
                            'status' => '0'
                        ];
                        $this->db->insert('validation_skp_user_pending', $data);
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data berhasil diinput, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
                        //Fungsi Email dimatikan dulu, cari solusi lain biar gak berat
                        //$this->_inputSKPsendEmail();
                        $this->InputSKPSendTelegramMSGSKP();
                        redirect('user/daftarvalidasi');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Data gagal diinput, dimohon input ulang data beserta bukti kegiatan/keterangan!</div>');
                        echo $this->upload->display_errors();
                    }
                }
            }
        }
    }

    //Halaman Edit SKP Details.
    public function editskpdetails()
    {
        $data['title'] = 'Ubah Data Validasi SKP B';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['skpvalidate'] = $this->db->get_where('validation_skp_user_pending', ['id' => $this->uri->segment(3)])->row_array();
        $skpdata['detailskpvalidation'] = $this->skp->GetSpecificUserSKPValidationData();
        $skpdata['eventposisi'] = $this->db->get('event_position')->result_array();
        $validatestatus = $this->skp->GetSpecificUserSKPValidationStatus();
        $validatesameuser = $this->skp->GetSpecificUserSKPValidationNPM();

        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim', [
            'required' => 'Posisi harus diisi!'
        ]);

        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!'
        ]);

        if ($validatestatus['status'] == 1) {
            redirect('user/daftarvalidasi');
        } else {
            if ($validatesameuser['npm'] != $this->session->userdata('npm')) {
                redirect('user/daftarvalidasi');
            } else {
                if ($this->form_validation->run() == false) {

                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/user/user_sidebar', $data);
                    $this->load->view('templates/user/user_topbar', $data);
                    $this->load->view('user/editskpdetails', $skpdata);
                    $this->load->view('templates/footer');
                } else {

                    $upload_image = $_FILES['image']['name'];
                    if (empty($upload_image)) {

                        $posisi = $this->input->post('posisi');
                        $bobot = $this->input->post('bobot');
                        $event = $this->input->post('event');
                        $tahun = $this->input->post('tahun');
                        $this->db->set('event', $event);
                        $this->db->set('tahun', $tahun);
                        $this->db->set('posisi', $posisi);
                        $this->db->set('bobot', $bobot);
                        $this->db->set('status', '0');
                        $this->db->set('rejection_reason', '');
                        $this->db->where('id', $this->uri->segment('3'));
                        $this->db->update('validation_skp_user_pending');
                        $this->session->set_flashdata('validasiulang', '<div class="alert alert-success" role="alert">
                        Data berhasil diedit, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
                        redirect('user/daftarvalidasi');
                    } else {
                        if ($upload_image) {
                            $config['allowed_types'] = 'jpg|png|pdf';
                            $config['max_size'] = '2048';
                            $config['upload_path'] = './assets/user_directory/' . $this->session->userdata('npm');
                            $this->load->library('upload', $config);
                            if ($this->upload->do_upload('image')) {
                                $old_image = $data['skpvalidate']['skp_proof'];
                                $npm = $data['skpvalidate']['npm'];

                                $gabungan = $npm . '/' . $old_image;

                                $new_image = $this->upload->data('file_name');
                                $skp_proof = $new_image;
                                unlink(FCPATH . 'assets/user_directory/' . $gabungan);

                                $posisi = $this->input->post('posisi');
                                $bobot = $this->input->post('bobot');
                                $event = $this->input->post('event');
                                $tahun = $this->input->post('tahun');

                                $this->db->set('event', $event);
                                $this->db->set('tahun', $tahun);
                                $this->db->set('posisi', $posisi);
                                $this->db->set('bobot', $bobot);
                                $this->db->set('status', '0');
                                $this->db->set('skp_proof', $skp_proof);
                                $this->db->set('rejection_reason', '');
                                $this->db->where('id', $this->uri->segment('3'));
                                $this->db->update('validation_skp_user_pending');


                                $this->session->set_flashdata('validasiulang', '<div class="alert alert-success" role="alert">
                        Data berhasil diedit, akan divalidasi lebih lanjut oleh Staff BEM!
                    </div>');
                                //$this->_inputSKPsendEmail();
                                $this->InputSKPSendTelegramMSGSKP();
                                redirect('user/daftarvalidasi');
                            } else {
                                $this->session->set_flashdata('datavalidasigagal', '<div class="alert alert-danger" role="alert">
                        Data gagal diinput, dimohon input ulang data beserta bukti kegiatan/keterangan!</div>');
                                echo $this->upload->display_errors();
                            }
                        }
                    }
                }
            }
        }
    }

    //Function Delete Validation (Menghapus data validasi yang diajukan oleh mahasiswa).
    public function deletevalidation()
    {
        $id =  $this->uri->segment(3);
        $image = $this->db->get_where('validation_skp_user_pending', ['id' => $this->uri->segment(3)])->row_array();
        $npm = $this->session->userdata('npm');
        $skp_proof = $image['skp_proof'];
        $gabungan = $npm . '/' . $skp_proof;
        unlink(FCPATH . 'assets/user_directory/' . $gabungan);
        $this->db->where('id', $id);
        $this->db->delete('validation_skp_user_pending');
        $this->session->set_flashdata('deletevalidasiberhasil', '<div class="alert alert-success" role="alert">
        Pengajuan SKP berhasil dibatalkan!</div>');
        redirect('user/daftarvalidasi');
    }

    //Halaman Ubah Password.
    public function changePassword()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->form_validation->set_rules('current_password', 'Password Lama', 'required|trim', [
            'required' => 'Password harus diisi!'
        ]);
        $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[6]|matches[new_password2]', [
            'required' => 'Password harus diisi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[6]|matches[new_password2]', [
            'required' => 'Password harus diisi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/user/user_sidebar', $data);
            $this->load->view('templates/user/user_topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Terdapat kesalahan</h5>
                    Password lama salah!
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Terdapat Kesalahan</h5>
                    Password baru tidak boleh sama dengan password lama!
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>');
                    redirect('user/changepassword');
                } else {
                    //Password Benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('npm', $this->session->userdata('npm'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Berhasil</h5>
                    Password Berhasil diubah! mohon diingat password yang baru.
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
