<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// DPM CONTROLLER
// BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

//SENTRY ERROR REPORTING
Sentry\init(['dsn' => 'https://4a7f7e1d5885447288e0031d20183b17@o1054582.ingest.sentry.io/6040032' ]);

class Dpm extends CI_Controller
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
        $data['title'] = 'Staff DPM Dashboard';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/dpm/dpm_sidebar', $data);
        $this->load->view('templates/dpm/dpm_topbar', $data);
        $this->load->view('dpm/index', $data);
        $this->load->view('templates/footer');
    }

    public function validasiproposal()
    {
        $data['title'] = 'Validasi Proposal Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['listproposalvalidation'] = $this->eventd->GetListAllValidationProposalDataDPM();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/dpm/dpm_sidebar', $data);
        $this->load->view('templates/dpm/dpm_topbar', $data);
        $this->load->view('dpm/validasiproposal', $data);
        $this->load->view('templates/footer');
    }

    public function validasisertif()
    {
        $data['title'] = 'Validasi Proposal Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['listsertifvalidation'] = $this->eventd->GetListAllValidationSertifData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/dpm/dpm_sidebar', $data);
        $this->load->view('templates/dpm/dpm_topbar', $data);
        $this->load->view('dpm/validasisertif', $data);
        $this->load->view('templates/footer');
    }

    public function detailvalidasiproposal()
    {
        $data['title'] = 'Detail Validasi Proposal';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['proposalvalidation'] = $this->eventd->GetSpecificProposalValidationData();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama kegiatan/keterangan harus diisi!',

        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!',

        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/dpm/dpm_sidebar', $data);
            $this->load->view('templates/dpm/dpm_topbar', $data);
            $this->load->view('dpm/detailvalidasiproposal', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $tahun = $this->input->post('tahun');
            $this->db->set('status', '4');
            $this->db->set('name', $name);
            $this->db->set('tahun', $tahun);
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('validation_proposal_pending');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Pengajuan berhasil di Validasi dan dilanjutkan ke Mahasiswa untuk dilanjutkan ke Dekanat!</div>');
            redirect('dpm/validasiproposal');
        }
    }
    public function detailpengarsipan()
    {
        $data['title'] = 'Validasi Proposal Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['proposalvalidationpending'] = $this->eventd->GetSpecificProposalValidationPending();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama kegiatan harus diisi!',
        ]);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/dpm/dpm_sidebar', $data);
            $this->load->view('templates/dpm/dpm_topbar', $data);
            $this->load->view('dpm/detailpengarsipan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->set('status', '1');
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('validation_proposal_pending');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Pengarsipan berhasil di Validasi!</div>');
            redirect('dpm/validasiproposal');
        }
    }

    public function rejectvalidasiproposal()
    {
        $rejection_reason = $this->uri->segment(4);
        $this->form_validation->set_rules('rejection_reason', 'Rejection Reason', 'required|trim', [
            'required' => 'Alasan harus diisi!',
        ]);
        $this->db->set('status', '2');
        $this->db->set('rejection_reason', $rejection_reason);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Validasi Proposal Kegiatan Ditolak!</div>');
        //Balikin fungsinya kalo yakin emailnya proper buat ngirim banyak sekaligus
        //$this->_validasiditolakSendEmail();
        redirect('dpm/validasiproposal');
    }
    public function rejectvalidasipengarsipan()
    {
        $rejection_reason = $this->uri->segment(4);
        $this->form_validation->set_rules('rejection_reason', 'Rejection Reason', 'required|trim', [
            'required' => 'Alasan harus diisi!',
        ]);
        $this->db->set('status', '7');
        $this->db->set('rejection_reason', $rejection_reason);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Validasi Pengarsipan Proposal Kegiatan Ditolak!</div>');
        //Balikin fungsinya kalo yakin emailnya proper buat ngirim banyak sekaligus
        //$this->_validasiditolakSendEmail();
        redirect('dpm/validasiproposal');
    }
    public function changeStatusProposalValidation()
    {

        /*
        Data Indication untuk nentuin Status mana yang di Update
        1 : Proposal
        2 : Surat Izin Kegiatan
        3 : Surat Pengesahan SKP
        4 : Surat Bantuan Dana
        5 : Surat Peminjaman Properti
        6 : Surat Peminjaman Ruangan
        */
        $dataindication = $this->input->post('dataindication');

        if ($dataindication == 1) {
            $this->eventd->UpdateProposalStatus();
        } else {
            if ($dataindication == 2) {
                $this->eventd->UpdateIzinKegiatanStatus();
            } else {
                if ($dataindication == 3) {
                    $this->eventd->UpdatePengesahanSKPStatus();
                } else {
                    if ($dataindication == 4) {
                        $this->eventd->UpdateBantuanDanaStatus();
                    } else {
                        if ($dataindication == 5) {
                            $this->eventd->UpdatePeminjamanPropertiStatus();
                        } else {
                            if ($dataindication == 6) {
                                $this->eventd->UpdatePeminjamanRuanganStatus();
                            }
                        }
                    }
                }
            }
        }
    }
}
