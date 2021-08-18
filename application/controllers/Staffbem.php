<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// INTERNAL STAFFBEM CONTROLLER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

class Staffbem extends CI_Controller
{
    //Construct untuk load Helper, Model dan External Function.
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('News_model', 'news');
        $this->load->model('SKPDatabase_model', 'skp');
        $this->load->model('Statistic_model', 'stats');
        $this->load->model('EventDatabase_model', 'eventd');
        $this->load->model('SendEmail_model', 'sendmailcontent');
        $this->load->model('Userdatabase_model', 'userdatabase');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Homepage';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['totalmahasiswa'] = $this->db->count_all('user', ['role_id' => 2]);
        $data['skpvalidationpending'] = $this->stats->GetTotalPendingSKPValidationData();
        $data['totalmahasiswa'] = $this->stats->GetTotalMahasiswaData();
        $data['eventvalidationpending'] = $this->eventd->CountAllValidationEventData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/index', $data);
        $this->load->view('templates/footer');
    }

    public function validasiskp()
    {
        $data['title'] = 'Validasi SKP B';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['listvalidasi'] = $this->skp->GetListAllSKPData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/validasiskp', $data);
        $this->load->view('templates/footer');
    }

    public function validasievent()
    {
        $data['title'] = 'Validasi Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['listvalidasi'] = $this->eventd->GetListAllEventData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/validasievent', $data);
        $this->load->view('templates/footer');
    }

    public function validasiproposal()
    {
        $data['title'] = 'Validasi Proposal Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['listproposalvalidation'] = $this->eventd->GetListAllValidationProposalData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/validasiproposal', $data);
        $this->load->view('templates/footer');
    }

    public function validasisertif()
    {
        $data['title'] = 'Validasi Proposal Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['listsertifvalidation'] = $this->eventd->GetListAllValidationSertifData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/validasisertif', $data);
        $this->load->view('templates/footer');
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
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/detailpengarsipan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->set('status', '6');
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('validation_proposal_pending');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Pengarsipan berhasil di Validasi dan dilanjutkan ke DPM!</div>');
            redirect('staffbem/validasiproposal');
        }
    }

    public function skpb_ajax_list()
    {
        $list = $this->skp->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $skpbpending) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $skpbpending->name;
            $row[] = $skpbpending->npm;
            $row[] = $skpbpending->event;
            $row[] = $skpbpending->tahun;
            $row[] = $skpbpending->posisi;
            $row[] = $skpbpending->bobot;
            $row[] = '<div class="badge bg-warning text-white rounded-pill">Menunggu Validasi</div>';
            $row[] = '<div class="text-center">
            <button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="' . base_url('staffbem/detailvalidasi/') . $skpbpending->id . '">
                    <div class="dropdown-item-icon">
                        <i class="fas fa-edit"></i>
                    </div>Data Lengkap
                </a>
            </div>
        </div>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->skp->count_all(),
            "recordsFiltered" => $this->skp->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function user_ajax_list()
    {
        $list = $this->userdatabase->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $user) {
            $skpa = $user->npm;
            $skpb = $user->npm;
            $skpreq = $user->angkatan;
            $listskpa = $this->userdatabase->SumTotalSKPUserA($skpa);
            $listskpb = $this->userdatabase->SumTotalSKPUserB($skpb);
            $listskpreq = $this->userdatabase->GetSKPRequirements($skpreq);
            $totalskp = $listskpa + $listskpb;
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $user->name;
            $row[] = '<div class="text-center">' . $user->npm . '</div>';
            $row[] = '<div class="text-center">' . $user->angkatan . $user->kelas . '</div>';
            if ($totalskp >= $listskpreq) {
                $badge = 'bg-green';
            } else {
                $badge = 'bg-red';
            }
            $row[] = '<div class="text-center"><div class="badge ' . $badge . ' text-white text-lg rounded-pill">' . $totalskp . ' / ' . $listskpreq . '</div></div>';
            $row[] = '<div class="text-center">
            <button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-info"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="' . base_url('staffbem/inputskpauser/') . $user->id . '">
                    <div class="dropdown-item-icon">
                        <i class="fas fa-edit"></i>
                    </div>Data SKP A
                </a>
                <a class="dropdown-item" href="' . base_url('staffbem/inputskpbuser/') . $user->id . '">
                    <div class="dropdown-item-icon">
                        <i class="fas fa-edit"></i>
                    </div>Data SKP B
                </a>
            </div>
        </div>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->userdatabase->count_all(),
            "recordsFiltered" => $this->userdatabase->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function skpdatabase()
    {
        $data['title'] = 'SKP Database';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->db->order_by('npm'); //Ngurutin dari NPM yang paling kecil 
        $data['userDatabaseMahasiswa'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/skpdatabase', $data);
        $this->load->view('templates/footer');
    }

    public function inputskpauser()
    {
        $this->session->set_userdata('referred_from', base_url('staffbem/inputskpauser/') . $this->uri->segment(3));
        $data['title'] = 'Input Data SKP A';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $skpdata['skpuserdataA'] = $this->skp->GetListSKPDataAForInput();
        $skpdata['userdata'] = $this->db->get_where('user', ['id' => $this->uri->segment(3)])->result_array();
        $skpdata['skp_a_ref'] = $this->db->get('skp_a_ref')->result_array();
        $userdata = $this->db->get_where('user', ['id' => $this->uri->segment(3)])->row_array();
        $npm = $userdata['npm'];



        $data['userDatabase'] = $this->db->get('user')->result_array();

        $buttonprint = '<a class="btn btn-dark btn-block mb-5" href="user/skpexport" target="_blank">Print Total SKP</a>';

        $this->form_validation->set_rules('event', 'Event', 'required|trim', [
            'required' => 'Nama kegiatan/keterangan harus diisi!',

        ]);
        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim', [
            'required' => 'Posisi harus diisi!',

        ]);
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!',

        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!',

        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/inputskpauser', $skpdata);
            $this->load->view('templates/footer');
        } else {
            $event_ref = $this->input->post('event');
            $skp_a_ref = $this->db->get_where('skp_a_ref', ['event_ref' => $event_ref])->row_array();

            $data = [
                'npm' => $npm,
                'tipe' => 'A',
                'event' => $this->input->post('event'),
                'tahun' => $this->input->post('tahun'),
                'posisi' => $this->input->post('posisi'),
                'bobot' => $this->input->post('bobot'),
                'skp_a_ref' => $skp_a_ref['id']
            ];
            $this->db->insert('total_user_skp_a', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data SKP A Mahasiswa berhasil diinput!</div>');
            redirect('staffbem/inputskpauser/' . $this->uri->segment(3));
        }
    }

    public function editskpadata()
    {
        $data['title'] = 'Ubah Data SKP A';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $adata = $this->db->get_where('total_user_skp_a', ['id' => $this->uri->segment(3)])->row_array();
        $npm = $adata['npm'];
        $udata = $this->db->get_where('user', ['npm' => $npm])->row_array();
        $skpdata['skpadata'] = $this->db->get_where('total_user_skp_a', ['id' => $this->uri->segment(3)])->result_array();
        $skpdata['userdata'] = $this->db->get_where('user', ['npm' => $npm])->result_array();
        $skpdata['skp_a_ref'] = $this->db->get('skp_a_ref')->result_array();
        $userdata = $this->db->get_where('user', ['id' => $this->uri->segment(3)])->row_array();

        $npm = $userdata['npm'];



        $data['userDatabase'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('event', 'Event', 'required|trim', [
            'required' => 'Nama kegiatan/keterangan harus diisi!',

        ]);
        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim', [
            'required' => 'Posisi harus diisi!',

        ]);
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!',

        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!',

        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/editskpadata', $skpdata);
            $this->load->view('templates/footer');
        } else {
            $event_ref = $this->input->post('event');
            $skp_a_ref = $this->db->get_where('skp_a_ref', ['event_ref' => $event_ref])->row_array();
            $event =  $this->input->post('event');
            $tahun = $this->input->post('tahun');
            $posisi = $this->input->post('posisi');
            $bobot = $this->input->post('bobot');
            $this->db->set('event', $event);
            $this->db->set('tahun', $tahun);
            $this->db->set('posisi', $posisi);
            $this->db->set('bobot', $bobot);
            $this->db->set('skp_a_ref', $skp_a_ref['id']);
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('total_user_skp_a');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data SKP A Mahasiswa berhasil diubah!</div>');
            redirect('staffbem/inputskpauser/' . $udata['id']);
        }
    }

    public function checkskpauthconfirm()
    {
        $this->load->library('encryption');
        $resultcode = $this->input->post('resultcode');
        $resultdecipher = $this->encryption->decrypt($resultcode);

        $data['title'] = 'Check SKP Authentication';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['userdata'] = $this->db->get_where('user', ['npm' => $resultdecipher])->result_array();


        if ($resultdecipher == false) {
            //Diluar dari Enkrpipsi yang dibuat SKP-KU
            echo 'salah';
            redirect('staffbem/checkskpauth');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/checkskpauthconfirm', $data);
            $this->load->view('templates/footer');
        }
    }

    public function checkskpauth()
    {
        $data['title'] = 'Check SKP Authentication';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/checkskpauth', $data);
        $this->load->view('templates/footer');
    }

    public function inputskpbuser()
    {
        $this->session->set_userdata('referred_from', base_url('staffbem/inputskpbuser/') . $this->uri->segment(3));
        $data['title'] = 'Input Data SKP B';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $skpdata['skpuserdataB'] = $this->skp->GetListSKPDataBForInput();
        $skpdata['userdata'] = $this->db->get_where('user', ['id' => $this->uri->segment(3)])->result_array();
        $userdata = $this->db->get_where('user', ['id' => $this->uri->segment(3)])->row_array();

        $npm = $userdata['npm'];
        $name = $userdata['name'];




        $data['userDatabase'] = $this->db->get('user')->result_array();

        $buttonprint = '<a class="btn btn-dark btn-block mb-5" href="user/skpexport" target="_blank">Print Total SKP</a>';

        $this->form_validation->set_rules('event', 'Event', 'required|trim', [
            'required' => 'Nama kegiatan/keterangan harus diisi!',

        ]);
        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim', [
            'required' => 'Posisi harus diisi!',

        ]);
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!',

        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!',

        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/inputskpbuser', $skpdata);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'name' => $name,
                'npm' => $npm,
                'tipe' => 'B',
                'event' => $this->input->post('event'),
                'tahun' => $this->input->post('tahun'),
                'posisi' => $this->input->post('posisi'),
                'bobot' => $this->input->post('bobot')
            ];
            $this->db->insert('total_user_skp_b', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data SKP B Mahasiswa berhasil diinput!</div>');
            redirect('staffbem/inputskpbuser/' . $this->uri->segment(3));
        }
    }

    public function editskpbdata()
    {
        $data['title'] = 'Ubah Data SKP B';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $adata = $this->db->get_where('total_user_skp_b', ['id' => $this->uri->segment(3)])->row_array();
        $npm = $adata['npm'];
        $udata = $this->db->get_where('user', ['npm' => $npm])->row_array();
        $skpdata['skpbdata'] = $this->db->get_where('total_user_skp_b', ['id' => $this->uri->segment(3)])->result_array();
        $skpdata['userdata'] = $this->db->get_where('user', ['npm' => $npm])->result_array();
        $userdata = $this->db->get_where('user', ['id' => $this->uri->segment(3)])->row_array();

        $npm = $userdata['npm'];



        $data['userDatabase'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('event', 'Event', 'required|trim', [
            'required' => 'Nama kegiatan/keterangan harus diisi!',

        ]);
        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim', [
            'required' => 'Posisi harus diisi!',

        ]);
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!',

        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!',

        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/editskpbdata', $skpdata);
            $this->load->view('templates/footer');
        } else {
            $event =  $this->input->post('event');
            $tahun = $this->input->post('tahun');
            $posisi = $this->input->post('posisi');
            $bobot = $this->input->post('bobot');
            $this->db->set('event', $event);
            $this->db->set('tahun', $tahun);
            $this->db->set('posisi', $posisi);
            $this->db->set('bobot', $bobot);
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('total_user_skp_b');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Data SKP B Mahasiswa berhasil diubah!</div>');
            redirect('staffbem/inputskpbuser/' . $udata['id']);
        }
    }

    public function deleteskpadata()
    {
        $id =  $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->delete('total_user_skp_a');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Data SKP A berhasil dihapus!</div>');
        $referred_from = $this->session->userdata('referred_from');
        redirect($referred_from);
    }

    public function deleteskpbdata()
    {
        $id =  $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->delete('total_user_skp_b');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Data SKP B berhasil dihapus!</div>');
        $referred_from = $this->session->userdata('referred_from');
        redirect($referred_from);
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

    public function detailvalidasi()
    {
        $data['title'] = 'Detail Validasi SKP';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['detailskpvalidation'] = $this->skp->GetSpecificUserSKPValidationData();
        $detailskp = $this->skp->GetSpecificUserSKPValidationData();

        foreach ($detailskp as $ds) :
            $event_detail = $ds['event'];

        endforeach;
        $data['detailevent'] = $this->db->get_where('event_data', ['name' => $event_detail])->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama harus diisi!',
        ]);
        $this->form_validation->set_rules('npm', 'NPM', 'required|trim', [
            'required' => 'NPM harus diisi!',

        ]);
        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim', [
            'required' => 'Tipe SKP A/B?!',

        ]);
        $this->form_validation->set_rules('event', 'Event', 'required|trim', [
            'required' => 'Nama kegiatan/keterangan harus diisi!',

        ]);
        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim', [
            'required' => 'Posisi harus diisi!',

        ]);
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
            'required' => 'Bobot harus diisi!',

        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/detailvalidasi', $data);
            $this->load->view('templates/footer');
        } else {
            $skpproof = $this->skp->GetSpecificUserSKPValidationProof();

            $data = [
                'name' => $this->input->post('name'),
                'npm' => $this->input->post('npm'),
                'tipe' => $this->input->post('tipe'),
                'event' => $this->input->post('event'),
                'posisi' => $this->input->post('posisi'),
                'bobot' => $this->input->post('bobot'),
                'tahun' => $this->input->post('tahun'),
                'skp_proof' => $skpproof['skp_proof']
            ];
            $npm = $this->input->post('npm');
            $skp_proof = $skpproof['skp_proof'];
            $gabungan = $npm . '/' . $skp_proof;
            $this->db->insert('total_user_skp_b', $data);
            $this->db->set('status', '1');
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('validation_skp_user_pending');
            unlink(FCPATH . 'assets/user_directory/' . $gabungan);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            SKP Berhasil di Validasi!</div>');
            $this->sendmailcontent->ValidasiSKPDiterima();
            redirect('staffbem/validasiskp');
        }
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
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/detailvalidasiproposal', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $tahun = $this->input->post('tahun');
            $this->db->set('status', '3');
            $this->db->set('name', $name);
            $this->db->set('tahun', $tahun);
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('validation_proposal_pending');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Pengajuan berhasil di Validasi dan dilanjutkan ke DPM!</div>');
            redirect('staffbem/validasiproposal');
        }
    }

    public function detailvalidasievent()
    {
        $data['title'] = 'Detail Validasi Kegiatan';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['eventdatavalidation'] = $this->eventd->GetSpecificEventValidationData();
        /*$pelaksana = $this->eventd->GetSpecificPelaksana();
        $lhk_proof = $this->eventd->GetSpecificLHKProof();
        $lpj_proof = $this->eventd->GetSpecificLPJProof();
        $sertif_proof = $this->eventd->GetSpecificSertifProof(); */

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama kegiatan harus diisi!'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim', [
            'required' => 'Tahun pelaksanaan harus diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/detailvalidasievent', $data);
            $this->load->view('templates/footer');
        } else {
            $eventdata = $this->eventd->GetSpecificEventValidationData();
            foreach ($eventdata as $ed) :
                $pelaksana = $ed['bso_id'];
                $lpj_proof = $ed['lpj_proof'];
                $lhk_proof = $ed['lhk_proof'];
                $sertif_proof = $ed['sertif_proof'];
            endforeach;
            $data = [
                'name' => $this->input->post('name'),
                'tahun' => $this->input->post('tahun'),
                'pelaksana' => $pelaksana,
                'lpj_proof' => $lpj_proof,
                'lhk_proof' => $lhk_proof,
                'sertif_proof' => $sertif_proof
            ];
            $this->db->insert('event_data', $data);
            $this->db->set('status', '1');
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('validation_event_pending');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Kegiatan Berhasil di Validasi!</div>');
            //SALAH
            //$this->_validasiditerimaSendEmail();
            redirect('staffbem/validasievent');
        }
    }
    //Function Reject Validasi SKP 
    public function rejectvalidasiskp()
    {
        $rejection_reason = $this->uri->segment(4);
        $this->form_validation->set_rules('rejection_reason', 'Rejection Reason', 'required|trim', [
            'required' => 'Alasan harus diisi!',
        ]);
        $this->db->set('status', '2');
        $this->db->set('rejection_reason', $rejection_reason);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_skp_user_pending');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Validasi SKP Ditolak!</div>');
        $this->sendmailcontent->ValidasiSKPDitolak();
        redirect('staffbem/validasiskp');
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
        redirect('staffbem/validasiproposal');
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
        redirect('staffbem/validasiproposal');
    }
    public function rejectvalidasievent()
    {
        $rejection_reason = $this->uri->segment(4);
        $this->form_validation->set_rules('rejection_reason', 'Rejection Reason', 'required|trim', [
            'required' => 'Alasan harus diisi!',
        ]);
        $this->db->set('status', '2');
        $this->db->set('rejection_reason', $rejection_reason);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_event_pending');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Validasi Data Kegiatan Ditolak!</div>');
        redirect('staffbem/validasievent');
    }

    //Obsolete Function (For Backup only)
    public function rejectvalidasi()
    {
        $data['title'] = 'Penolakan Validasi SKP';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['detailskpvalidation'] = $this->skp->GetSpecificUserSKPValidationData();

        $this->form_validation->set_rules('rejection_reason', 'Rejection Reason', 'required|trim', [
            'required' => 'Alasan harus diisi!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/rejectvalidasi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->set('status', '2');
            $this->db->set('rejection_reason', $this->input->post('rejection_reason'));
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('validation_skp_user_pending');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Validasi SKP Ditolak!</div>');
            //$this->_validasiditolakSendEmail();
            redirect('staffbem/validasiskp');
        }
    }

    public function newsmanager()
    {
        $data['title'] = 'News Manager';

        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Judul harus diisi!',
            'min_length' => 'Judul terlalu pendek!'
        ]);

        $this->form_validation->set_rules('contents', 'Contents', 'required|min_length[20]', [
            'required' => 'Konten harus diisi!',
            'min_length' => 'Berita terlalu pendek!, minimal 20 kata'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/news_header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/newsmanager');
            $this->load->view('templates/news_footer');
        } else {
            $title = $this->input->post('title', TRUE);
            $contents = $this->input->post('contents', TRUE);
            $author = 'BEM';
            $date = date('F, dS Y');

            $data = [
                'title' => $title,
                'contents' => $contents,
                'author' => $author,
                'date_created' => $date
            ];

            $this->db->insert('news', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita berhasil ditambahkan!</div>');
            redirect('staffbem/listPost');
        }
    }

    public function editnews()
    {
        $data['title'] = 'Edit News';

        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['newsdata'] = $this->db->get_where('news', ['id' => $this->uri->segment(3)])->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Judul harus diisi!',
            'min_length' => 'Judul terlalu pendek!'
        ]);

        $this->form_validation->set_rules('contents', 'Contents', 'required|min_length[20]', [
            'required' => 'Konten harus diisi!',
            'min_length' => 'Berita terlalu pendek!, minimal 20 kata'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/news_header', $data);
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/editnews', $data);
            $this->load->view('templates/news_footer');
        } else {
            $title = $this->input->post('title', TRUE);
            $contents = $this->input->post('contents', TRUE);
            $author = 'BEM';
            $date = date('F, dS Y');

            $this->db->set('title', $title);
            $this->db->set('contents', $contents);
            $this->db->set('author', $author);
            $this->db->set('date_created', $date);
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('news');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita berhasil diedit!</div>');
            redirect('staffbem/listPost');
        }
    }

    public function listPost()
    {
        $data['title'] = 'News Manager';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        //$data['daftar'] = $this->db->get('news')->result_array(); - Method Lama

        //Load Library di Autoload
        //Pagination Berita
        //Config
        $config['base_url'] = '/sistem/staffbem/listPost';
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


        //Initialize
        $this->pagination->Initialize($config);



        $data['start'] = $this->uri->segment(3);

        $data['daftar'] = $this->news->getNewsPage($config['per_page'], $data['start']);
        $this->load->view('templates/news_header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/daftar', $data);
        $this->load->view('templates/footer');
    }




    public function detailPost($id)
    {
        $data['title'] = 'News Manager';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['detail'] = $this->db->get_where('news', ['id' => $id])->row_array();
        $this->load->view('templates/news_header', $data);
        $this->load->view('templates/staffbem/staffbem_sidebar', $data);
        $this->load->view('templates/staffbem/staffbem_topbar', $data);
        $this->load->view('staffbem/detail', $data);
        $this->load->view('templates/footer');
    }

    function GetEventStatistic()
    {
        $totalevent = $this->stats->GetTotalEvent();
        echo json_encode($totalevent);
    }

    // Upload image summernote
    function upload_image()
    {
        if (isset($_FILES["image"]["name"])) {
            $config['upload_path'] = './assets/img/blog';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/blog/' . $data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 800;
                $config['new_image'] = './assets/img/blog' . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url() . 'assets/img/blog' . $data['file_name'];
            }
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
            $this->load->view('templates/staffbem/staffbem_sidebar', $data);
            $this->load->view('templates/staffbem/staffbem_topbar', $data);
            $this->load->view('staffbem/changepassword', $data);
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
                redirect('staffbem/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Terdapat Kesalahan</h5>
                    Password baru tidak boleh sama dengan password lama!
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>');
                    redirect('staffbem/changepassword');
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
                    redirect('staffbem/changepassword');
                }
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
