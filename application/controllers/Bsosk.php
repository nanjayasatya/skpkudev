<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// BSO & SK CONTROLLER
// BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

//SENTRY ERROR REPORTING
Sentry\init(['dsn' => 'https://4a7f7e1d5885447288e0031d20183b17@o1054582.ingest.sentry.io/6040032' ]);

class Bsosk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('EventDatabase_model', 'eventd');
        $this->load->model('Statistic_model', 'stats');
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'BSO/SK Dashboard';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['totaleventdata'] = $this->stats->GetTotalEventDataBSOSK();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/bsosk/bsosk_sidebar', $data);
        $this->load->view('templates/bsosk/bsosk_topbar', $data);
        $this->load->view('bsosk/index', $data);
        $this->load->view('templates/footer');
    }

    public function eventdatabase()
    {
        $data['title'] = 'Event Database';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $eventorgdata = $this->eventd->GetEventOrgData();
        $data['eventdata'] = $this->db->get_where('event_data', ['pelaksana' => $eventorgdata['id']])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/bsosk/bsosk_sidebar', $data);
        $this->load->view('templates/bsosk/bsosk_topbar', $data);
        $this->load->view('bsosk/eventdatabase', $data);
        $this->load->view('templates/footer');
    }

    public function inputeventdata()
    {
        $data['title'] = 'Validasi Data Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $eventorgdata = $this->db->get_where('event_org', ['pelaksana' => $this->session->userdata('name')])->row_array();
        $data['eventdata'] = $this->eventd->GetListProposalAdmittedData();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Kegiatan harus dipilih!'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!'
        ]);
        $this->form_validation->set_rules('lpj_proof', 'Lpj_proof', 'required|trim', [
            'required' => 'Link google drive LPJ harus diisi!'
        ]);
        $this->form_validation->set_rules('lhk_proof', 'Lhk_proof', 'required|trim', [
            'required' => 'Link google drive LHK harus diisi!'
        ]);
        $this->form_validation->set_rules('sertif_proof', 'Sertif_proof', 'required|trim', [
            'required' => 'Link google drive Contoh Sertifikat harus diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/inputeventdata', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'pelaksana' => $eventorgdata['id'],
                'name' => $this->input->post('name'),
                'tahun' => $this->input->post('tahun'),
                'lpj_proof' => $this->input->post('lpj_proof'),
                'lhk_proof' => $this->input->post('lhk_proof'),
                'sertif_proof' => $this->input->post('sertif_proof'),
                'status' => '0'
            ];
            $this->db->insert('validation_event_pending', $data);
            $this->session->set_flashdata('validasi', '<div class="alert alert-success" role="alert">
            Data berhasil diinput, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
            redirect('bsosk/daftarvalidasi');
        }
    }

    public function editproposaldetails()
    {
        $data['title'] = 'Edit Proposal Details';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['proposalvalidationpending'] = $this->eventd->GetSpecificProposalValidationPending();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama kegiatan harus diisi!'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!'
        ]);
        $this->form_validation->set_rules('drive_link', 'Drive_link', 'required|trim', [
            'required' => 'Link google drive Berkas harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/editproposaldetails', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $tahun = $this->input->post('tahun');
            $drive_link = $this->input->post('drive_link');
            $this->db->set('status', '0');
            $this->db->set('name', $name);
            $this->db->set('tahun', $tahun);
            $this->db->set('drive_link', $drive_link);
            $this->db->where('id', $this->uri->segment('3'));
            $this->db->update('validation_proposal_pending');
            $this->session->set_flashdata('validasiulang', '<div class="alert alert-success" role="alert">
            Data berhasil diedit, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
            redirect('bsosk/daftarvalidasiproposal');
        }
    }

    public function editproposalarchivedetails()
    {
        $data['title'] = 'Edit Proposal Archive Details';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['proposalvalidationpending'] = $this->eventd->GetSpecificProposalValidationPending();

        $this->form_validation->set_rules('drive_link', 'Drive_link', 'required|trim', [
            'required' => 'Link google drive Berkas pengarsipan harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/editproposalarchivedetails', $data);
            $this->load->view('templates/footer');
        } else {
            $dataproposal = $this->eventd->GetSpecificProposalValidationPending();
            foreach ($dataproposal as $dp) :
            endforeach;

            $arsip_link = $this->input->post('drive_link');
            $this->db->set('arsip_link', $arsip_link);
            $this->db->set('status', '5');
            $this->db->where('id', $this->uri->segment('3'));
            $this->db->update('validation_proposal_pending');
            $this->session->set_flashdata('validasiulang', '<div class="alert alert-success" role="alert">
            Data berhasil diedit, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
            redirect('bsosk/daftarvalidasiproposal');
        }
    }

    public function proposalarchive()
    {
        $data['title'] = 'Pengarsipan Proposal';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['proposalvalidationpending'] = $this->eventd->GetSpecificProposalValidationPending();

        $this->form_validation->set_rules('drive_link', 'Drive_link', 'required|trim', [
            'required' => 'Link google drive Berkas pengarsipan harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/proposalarchive', $data);
            $this->load->view('templates/footer');
        } else {
            $arsip_link = $this->input->post('drive_link');
            $this->db->set('arsip_link', $arsip_link);
            $this->db->set('status', '5');
            $this->db->where('id', $this->uri->segment('3'));
            $this->db->update('validation_proposal_pending');
            $this->session->set_flashdata('validasiulang', '<div class="alert alert-success" role="alert">
            Data berhasil diinput, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
            redirect('bsosk/daftarvalidasiproposal');
        }
    }

    //Function Delete Validation (Menghapus data validasi yang diajukan oleh BSO/SK).
    public function deleteproposalvalidation()
    {
        $id = $this->uri->segment(3);
        $proposaldata = $this->db->get_where('validation_proposal_pending', ['id' => $id])->result_array();
        $bsodata = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->result_array();

        foreach ($proposaldata as $pd) :
        endforeach;

        foreach ($bsodata as $bd) :
        endforeach;

        if ($pd['pelaksana'] == $bd['bso_id']) {
            $this->db->where('id', $id);
            $this->db->delete('validation_proposal_pending');
            $this->session->set_flashdata('deletevalidasiberhasil', '<div class="alert alert-success" role="alert">
            Pengajuan Proposal Kegiatan berhasil dibatalkan!</div>');
            redirect('bsosk/daftarvalidasiproposal');
        } else {
            redirect('bsosk/daftarvalidasiproposal');
        }
    }

    public function deletevalidation()
    {
        $id =  $this->uri->segment(3);
        $eventdata = $this->db->get_where('validation_event_pending', ['id' => $id])->result_array();
        $bsodata = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->result_array();

        foreach ($eventdata as $ed) :
        endforeach;

        foreach ($bsodata as $bd) :
        endforeach;

        if ($ed['pelaksana'] == $bd['bso_id']) {
            $this->db->where('id', $id);
            $this->db->delete('validation_event_pending');
            $this->session->set_flashdata('deletevalidasiberhasil', '<div class="alert alert-success" role="alert">
             Pengajuan validasi Kegiatan berhasil dibatalkan!</div>');
            redirect('bsosk/daftarvalidasi');
        } else {
            redirect('bsosk/daftarvalidasi');
        }
    }

    public function daftarvalidasi()
    {
        $data['title'] = 'List Validasi SKP';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $eventdata['eventdatapendingvalidation'] = $this->eventd->GetListEventData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/bsosk/bsosk_sidebar', $data);
        $this->load->view('templates/bsosk/bsosk_topbar', $data);
        $this->load->view('bsosk/daftarvalidasi', $eventdata);
        $this->load->view('templates/footer');
    }

    public function inputproposal()
    {
        $data['title'] = 'Validasi Data Proposal';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $eventorgdata = $this->db->get_where('event_org', ['pelaksana' => $this->session->userdata('name')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama kegiatan harus diisi!'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!'
        ]);
        $this->form_validation->set_rules('type', 'Type', 'required|trim', [
            'required' => 'Jenis kegiatan harus dipilih!'
        ]);
        $this->form_validation->set_rules('drive_link', 'Drive_link', 'required|trim', [
            'required' => 'Link google drive Berkas harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/inputproposal', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'pelaksana' => $eventorgdata['id'],
                'name' => $this->input->post('name'),
                'tahun' => $this->input->post('tahun'),
                'drive_link' => $this->input->post('drive_link'),
                'type' => $this->input->post('type'),
                'proposal_status' => '0',
                'izinkegiatan_status' => '0',
                'pengesahanskp_status' => '0',
                'bantuandana_status' => '0',
                'peminjamanproperti_status' => '0',
                'peminjamanruangan_status' => '0',
                'status' => '0'
            ];
            $this->db->insert('validation_proposal_pending', $data);
            $this->session->set_flashdata('validasi', '<div class="alert alert-success" role="alert">
            Data berhasil diinput, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
            redirect('bsosk/daftarvalidasiproposal');
        }
    }

    public function inputsertif()
    {
        $data['title'] = 'List Validasi SKP';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $eventorgdata = $this->db->get_where('event_org', ['pelaksana' => $this->session->userdata('name')])->row_array();
        $data['eventdata'] = $this->eventd->GetListProposalAdmittedData();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Kegiatan harus dipilih!'
        ]);
        $this->form_validation->set_rules('sertif_proof', 'Sertif_proof', 'required|trim', [
            'required' => 'Link google drive Sertifikat harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/inputsertif');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'pelaksana' => $eventorgdata['id'],
                'name' => $this->input->post('name'),
                'sertif_proof' => $this->input->post('sertif_proof'),
                'status' => '0'
            ];
        }
    }

    public function daftarvalidasiproposal()
    {
        $data['title'] = 'Input Data Proposal';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['proposalvalidationpending'] = $this->eventd->GetListValidationProposalData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/bsosk/bsosk_sidebar', $data);
        $this->load->view('templates/bsosk/bsosk_topbar', $data);
        $this->load->view('bsosk/daftarvalidasiproposal', $data);
        $this->load->view('templates/footer');
    }

    public function editeventdetails()
    {
        $data['title'] = 'Edit Event Details';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['eventdata'] = $this->db->get_where('validation_event_pending', ['id' => $this->uri->segment(3)])->row_array();
        $data['eventdatavalidation'] = $this->eventd->GetSpecificEventValidationData();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama kegiatan harus diisi!'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!'
        ]);
        $this->form_validation->set_rules('lpj_proof', 'Lpj_proof', 'required|trim', [
            'required' => 'Link google drive LPJ harus diisi!'
        ]);
        $this->form_validation->set_rules('lhk_proof', 'Lhk_proof', 'required|trim', [
            'required' => 'Link google drive LHK harus diisi!'
        ]);
        $this->form_validation->set_rules('sertif_proof', 'Sertif_proof', 'required|trim', [
            'required' => 'Link google drive Contoh Sertifikat harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/editeventdetails', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $tahun = $this->input->post('tahun');
            $lpj_proof = $this->input->post('lpj_proof');
            $lhk_proof = $this->input->post('lhk_proof');
            $sertif_proof = $this->input->post('sertif_proof');
            $this->db->set('name', $name);
            $this->db->set('tahun', $tahun);
            $this->db->set('lpj_proof', $lpj_proof);
            $this->db->set('lhk_proof', $lhk_proof);
            $this->db->set('sertif_proof', $sertif_proof);
            $this->db->set('status', '0');
            $this->db->set('rejection_reason', '');
            $this->db->where('id', $this->uri->segment('3'));
            $this->db->update('validation_event_pending');
            $this->session->set_flashdata('validasiulang', '<div class="alert alert-success" role="alert">
            Data berhasil diedit, akan divalidasi lebih lanjut oleh Staff BEM!</div>');
            redirect('bsosk/daftarvalidasi');
        }
    }
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
            $this->load->view('templates/bsosk/bsosk_sidebar', $data);
            $this->load->view('templates/bsosk/bsosk_topbar', $data);
            $this->load->view('bsosk/changepassword', $data);
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
                redirect('bsosk/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Terdapat Kesalahan</h5>
                    Password baru tidak boleh sama dengan password lama!
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>');
                    redirect('bsosk/changepassword');
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
                    redirect('bsosk/changepassword');
                }
            }
        }
    }
}
