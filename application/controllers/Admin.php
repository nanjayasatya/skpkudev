<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// ADMIN CONTROLLER
// BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

class Admin extends CI_Controller
{
    //Construct untuk load Helper, Model dan External Function.
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->helper('url');
        $this->load->model('News_model', 'news');
        $this->load->model('Menumanagement_model', 'menumodel');
        $this->load->model('Userdatabase_model', 'userdatabase');
        $this->load->model('Statistic_model', 'stats');
        $this->load->model('SendEmail_model', 'sendmailcontent');
        is_logged_in();
    }

    //Halaman Index.
    public function index()
    {
        $data['title'] = 'Homepage';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        //Aktifkan Kalo Perlu
        /*$data['totalbem'] = $this->db->count_all('user', ['role_id' => 3]);
        $data['totalbso'] = $this->db->count_all('user', ['role_id' => 4]);
        $data['totalcountbso'] = $this->stats->GetTotalBSO();
        $data['totalcountbem'] = $this->stats->GetTotalBEM(); */

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    //Function Update Web Status (Maintenance Purposes).
    private function _updatewebstatus()
    {
        $npm = $this->session->userdata('npm');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['npm' => $npm])->row_array();
        $web_status = $this->db->get_where('web_status', ['id' => 1])->row_array();
        if ($web_status['up_status'] == 1) {
            $up_status = '0';
        } else {
            $up_status = '1';
        }

        if (password_verify($password, $user['password'])) {
            $this->db->set('up_status', $up_status);
            $this->db->update('web_status');
            $this->db->where('id', 1);
            redirect('admin/webmaintenance');
        } else {
            $this->session->set_flashdata('erroraktif', '<div class="alert alert-danger" role="alert">
                Password salah!</div>');
            redirect('admin/webmaintenance');
        }
    }

    //Halaman Web Maintenance.
    public function webmaintenance()
    {
        $data['title'] = 'Web Maintenance';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['web_data'] = $this->db->get_where('web_status', ['id' => 1])->result_array();
        $web_status = $this->db->get_where('web_status', ['id' => 1])->row_array();

        $this->form_validation->set_rules('password', "Password", "trim|required", [
            'required' => 'Password harus diisi!'
        ]);

        if ($web_status['up_status'] == 1) {
            $up_status = '0';
        } else {
            $up_status = '1';
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/webmaintenance');
            $this->load->view('templates/footer');
        } else {
            $this->_updatewebstatus();
        }
    }

    //Halaman Tambah Menu.
    public function addmenu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required|trim', [
            'required' => 'Nama Menu harus diisi!',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/addmenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu berhasil ditambahkan!</div>');
            redirect('admin/addmenu');
        }
    }

    //Halaman Sub Menu.
    public function submenu()
    {
        $data['title'] = 'Sub-menu Management';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        //Pagination masih belum mau per page
        //Pagination
        $config['base_url'] = '/sistem/admin/submenu';
        $config['total_rows'] = $this->menu->countAllDataMenu();
        $config['per_page'] = 5;

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

        $data['daftar'] = $this->menu->getDataMenuPage($config['per_page'], $data['start']);


        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Title harus diisi!'
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required', [
            'required' => 'Group user harus dipilih!'
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required', [
            'required' => 'URL harus diisi!'
        ]);
        $this->form_validation->set_rules('icon', 'icon', 'required', [
            'required' => 'Icon harus diisi! Bisa dilihat di website fontawesome.com'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')

            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Sub Menu berhasil ditambahkan!</div>');
            redirect('admin/submenu');
        }
    }

    public function csrfName()
    {
        $csrfName = $this->security->get_csrf_token_name();
        echo $csrfName;
    }

    public function csrfHash()
    {
        $csrfHash = $this->security->get_csrf_hash();
        echo $csrfHash;
    }

    public function user_ajax_list()
    {
        $list = $this->userdatabase->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $user) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $user->name;
            $row[] = '<div class="text-center">' . $user->npm . '</div>';
            $row[] = '<div class="text-center">' . $user->angkatan . $user->kelas . '</div>';
            $row[] = $user->email;
            $row[] = '<div class="text-center">
            <button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="' . base_url('admin/useredit/') . $user->id . '">
                    <div class="dropdown-item-icon">
                        <i class="fas fa-edit"></i>
                    </div>Data Lengkap
                </a>
                <a class="dropdown-item" href="' . base_url('admin/passwordreset/') . $user->id . '">
                    <div class="dropdown-item-icon">
                        <i class="fas fa-key"></i>
                    </div>Reset Password
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

    //Halaman User Database (Mahasiswa Only).
    public function userDatabase()
    {
        $data['title'] = 'User Database Management';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        /*$this->db->where('role_id !=', 1);
        $this->db->where('role_id !=', 3);
        $this->db->where('role_id !=', 4);
        $this->db->where('role_id !=', 5);
        $this->db->order_by('npm'); //Ngurutin dari NPM yang paling kecil 
        $data['userDatabaseMahasiswa'] = $this->db->get('user')->result_array(); */

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/userdatabase', $data);
        $this->load->view('templates/footer');
    }

    //Halaman User Database (BSO/SK Only).
    public function userDatabasebsosk()
    {
        $data['title'] = 'User Database Management';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->db->where('role_id !=', 1);
        $this->db->where('role_id !=', 2);
        $this->db->where('role_id !=', 3);
        $this->db->where('role_id !=', 5);
        $this->db->order_by('id'); //Ngurutin dari ID yang paling kecil 
        $data['userDatabaseBSOSK'] = $this->db->get('user')->result_array();

        /* $this->db->where('id !=', 1);
        $this->db->where('id !=', 3); */

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/userdatabasebsosk', $data);
        $this->load->view('templates/footer');
    }

    //Halaman Role Management.
    public function role()
    {
        $data['title'] = 'User Role Management';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    //Halaman User Edit.
    public function useredit()
    {
        $data['title'] = 'Data Lengkap Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $fulldata['userfulldata'] = $this->userdatabase->getUserFullData();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama harus di isi dengan rapi! Contoh : Muhammad Rizky Baihaqy',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email harus di isi dengan email aktif! Contoh : rizkybaihaqy@gmail.com',
        ]);
        $this->form_validation->set_rules('npm', 'NPM', 'required|trim', [
            'required' => 'NPM harus di isi!',
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kelas harus di isi dengan huruf kapital! Contoh : A/B/C/D'
        ]);

        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim', [
            'required' => 'Angkatan harus di isi dengan angka! Contoh : 2017/2018/2019 dst..'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/useredit', $fulldata);
            $this->load->view('templates/footer');
        } else {
            $name = htmlspecialchars($this->input->post('name', true));
            $email = htmlspecialchars($this->input->post('email', true));
            $npm = $this->input->post('npm');
            $angkatan = $this->input->post('angkatan');
            $kelas = $this->input->post('kelas');
            $id = $this->uri->segment(3);
            //Tambahin dibawah ini untuk data yang lain

            //Dibawah ini udah masukin ke db
            $this->db->set('name', $name);
            $this->db->set('email', $email);
            $this->db->set('npm', $npm);
            $this->db->set('angkatan', $angkatan);
            $this->db->set('kelas', $kelas);
            $this->db->where('id', $id);
            $this->db->update('user');
            //$this->userdatabase->updateUser(); <-- dipake kalo functionnya udah jalan, check model
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah!</div>');
            redirect('admin/useredit/' . $this->uri->segment(3));
        }
    }

    //Halaman Registrasi User Baru.
    public function useradd()
    {
        $data['title'] = 'Daftar User Baru (Mahasiswa)';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[user.name]', [
            'required' => 'Nama harus di isi dengan rapi! Contoh : Muhammad Rizky Baihaqy',
            'is_unique' => 'Nama sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email harus di isi dengan email aktif! Contoh : rizkybaihaqy@gmail.com',
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('npm', 'NPM', 'required|trim|is_unique[user.npm]', [
            'required' => 'NPM harus di isi!',
            'is_unique' => 'NPM sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kelas harus di isi dengan huruf kapital! Contoh : A/B/C/D'
        ]);

        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim', [
            'required' => 'Angkatan harus di isi dengan angka! Contoh : 2017/2018/2019 dst..'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Password harus diisi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar User Baru';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/useradd', $data);
            $this->load->view('templates/footer');
        } else {
            $userdirectory = base_url('assets/user_directory/') . $this->input->post('npm');
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time(),
                'npm' => $this->input->post('npm'),
                'angkatan' => $this->input->post('angkatan'),
                'kelas' => $this->input->post('kelas'),
                'u_directory' =>  $userdirectory
            ];

            mkdir("assets/user_directory/" . $data['npm'], 0777);
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat, Akun berhasil didaftarkan!</div>');
            redirect('admin/userdatabase');
        }
    }

    public function useraddbsosk()
    {
        $data['title'] = 'Daftar User Baru (BSO/SK)';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[user.name]', [
            'required' => 'Nama harus di isi dengan rapi! Contoh : Muhammad Rizky Baihaqy',
            'is_unique' => 'Nama sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email harus di isi dengan email aktif! Contoh : rizkybaihaqy@gmail.com',
            'is_unique' => 'Email sudah terdaftar!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Password harus diisi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar User Baru';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/useraddbsosk', $data);
            $this->load->view('templates/footer');
        } else {
            $userdirectory = base_url('assets/bsosk_directory/') . $this->input->post('name');
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 4,
                'is_active' => 1,
                'date_created' => time(),
                'npm' => htmlspecialchars($this->input->post('name', true)),
                'angkatan' => htmlspecialchars($this->input->post('name', true)),
                'kelas' => 'F',
                'u_directory' =>  $userdirectory
            ];

            mkdir("assets/bsosk_directory/" . $this->input->post('name'), 0777);
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat, Akun berhasil didaftarkan!</div>');
            redirect('admin/userdatabasebsosk');
        }
    }

    //Halaman Role Access Management.
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access Management';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    //Halaman Ubah Akses Role.
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access berhasil diubah!</div>');
    }

    //Halaman News Manager (Berita).
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
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/newsmanager');
            $this->load->view('templates/news_footer');
        } else {
            $title = $this->input->post('title', TRUE);
            $contents = $this->input->post('contents', TRUE);
            $author = 'ADMINISTRATOR';
            $date = date('F, dS Y');


            $data = [
                'title' => $title,
                'contents' => $contents,
                'author' => $author,
                'date_created' => $date
            ];

            $this->db->insert('news', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita berhasil ditambahkan!</div>');
            redirect('admin/listPost');
        }
    }

    //Halaman Edit News (Berita).
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
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editnews', $data);
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
            redirect('admin/listPost');
        }
    }

    //Halaman List News (Berita).
    public function listPost()
    {
        $data['title'] = 'News Manager';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        //$data['daftar'] = $this->db->get('news')->result_array(); - Method Lama

        //Load Library di Autoload
        //Pagination Berita
        //Config
        $config['base_url'] = '/sistem/admin/listPost';
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
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/daftar', $data);
        $this->load->view('templates/footer');
    }

    //Halaman Detail News (Berita).
    public function detailPost($id)
    {
        $data['title'] = 'News Manager';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['detail'] = $this->db->get_where('news', ['id' => $id])->row_array();
        $this->load->view('templates/news_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    //Halaman BEM Status
    public function bemstatus()
    {
        $data['title'] = 'User Password Reset';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['bemstatus'] = $this->db->get_where('bem_status', ['id' => '1'])->row_array();

        $this->form_validation->set_rules('gubem_name', 'Gubem_name', 'required|trim', [
            'required' => 'Nama Gubernur BEM harus diisi!',
        ]);
        $this->form_validation->set_rules('gubem_npm', 'Gubem_npm', 'required|trim', [
            'required' => 'NPM Gubernur BEM harus diisi!',
        ]);
        $this->form_validation->set_rules('tahun_bakti', 'Tahun_bakti', 'required|trim', [
            'required' => 'Tahun bakti harus diisi!',
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/bemstatus', $data);
            $this->load->view('templates/footer');
        } else {
            $gubem_name = $this->input->post('gubem_name');
            $gubem_npm = $this->input->post('gubem_npm');
            $tahun_bakti = $this->input->post('tahun_bakti');
            $this->db->set('gubem_name', $gubem_name);
            $this->db->set('gubem_npm', $gubem_npm);
            $this->db->set('tahun_bakti', $tahun_bakti);
            $this->db->where('id', '1');
            $this->db->update('bem_status');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            BEM Status berhasil diubah!</div>');
            redirect('admin/bemstatus/');
        }
    }


    //Halaman Reset Password (Mahasiswa).
    public function passwordreset()
    {
        $data['title'] = 'User Password Reset';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $fulldata['userfulldata'] = $this->userdatabase->getUserFullData();
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
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/passwordreset', $fulldata);
            $this->load->view('templates/footer');
        } else {
            $new_password = $this->input->post('new_password1');

            $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
            $this->db->set('password', $password_hash);
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password berhasil direset!</div>');
            $this->sendmailcontent->ResetPassword();
            redirect('admin/passwordreset/' . $this->uri->segment(3));
        }
    }

    // Upload image summernote
    public function upload_image()
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
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/changepassword', $data);
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
                redirect('admin/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Terdapat Kesalahan</h5>
                    Password baru tidak boleh sama dengan password lama!
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>');
                    redirect('admin/changepassword');
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
                    redirect('admin/changepassword');
                }
            }
        }
    }

    public function userpasswordreset()
    {
        $data['title'] = 'Reset Password Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $data['userfulldata'] = $this->userdatabase->getUserFullData();

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
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/userpasswordreset', $data);
            $this->load->view('templates/footer');
        } else {
            $new_password = $this->input->post('new_password1');
            $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
            $this->db->set('password', $password_hash);
            $this->db->where('id', $this->uri->segment(3));
            $this->db->update('user');
            $userid = $this->uri->segment(3);

            $this->session->set_flashdata('passwordresetmessage', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Berhasil</h5>
                    Password Berhasil diubah! mohon diingat password yang baru.
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>');
            $this->sendmailcontent->ResetPassword();
            redirect('admin/userpasswordreset/' . $userid);
        }
    }



    // Delete image Summernote
    public function delete_image()
    {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if (unlink($file_name)) {
            echo 'File Delete Successfully';
        }
    }
}
