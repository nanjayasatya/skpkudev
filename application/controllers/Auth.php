<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// AUTH CONTROLLER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

class Auth extends CI_Controller
{
    //Construct untuk load Helper, Model dan External Function.
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('text');
        $this->load->model('TelegramBot_model', 'telbot');
    }


    //Email Send Function
    public function _userloginSendTelegram()
    {
        date_default_timezone_set('Asia/Bangkok');
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

        $MSG = "&#10071; <strong>Informasi Login User</strong>
        \n&#128273 User: " . $this->input->post('npm') . "
        \n&#128221; Nama: " . $this->session->userdata('name') . "
        \n&#128345; Login Time: " . date("F, \ j Y h:i:s A") . "
        \n&#128187; IP Address: " . $_SERVER['REMOTE_ADDR'] . "
        \n&#127759; City: " . $details->city . "
        \n&#127759; Region: " . $details->region . "
        \n&#127759; Country: " . $details->country . "
        \n&#128246; ISP: " . $details->org . "
        \n&#128345; Timezone: " . $details->timezone . "
        \n&#128187; User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "";
        $SEPARATOR = '====================';
        $this->telbot->SendTelegramMSGDEV($SEPARATOR);
        $this->telbot->SendTelegramMSGDEV($MSG);
    }

    private function _userloginSendMail()
    {
        date_default_timezone_set('Asia/Bangkok');
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        echo $details->city; // -> "Mountain View"
        $email = 'skpkubemfkuwks@gmail.com';
        $message = '<br><p><strong>User</strong> : ' . $this->input->post('npm') . '</br>
                    <br><p><strong>Name</strong> : ' . $this->session->userdata('name') . '</br>
                    <br><p><strong>Login Time</strong> : ' . date("F, \ j Y h:i:s A") . '</br>
                    <br><p><strong>IP Address</strong> : ' . $_SERVER['REMOTE_ADDR'] . '</br>
                    <br><p><strong>City</strong> : ' . $details->city . '</br>
                    <br><p><strong>Region</strong> : ' . $details->region . '</br>
                    <br><p><strong>Country</strong> : ' . $details->country . '</br>
                    <br><p><strong>ISP</strong> : ' . $details->org . '</br>
                    <br><p><strong>Timezone</strong> : ' . $details->timezone . '</br>
                    <br><p><strong>User Agent</strong> : ' . $_SERVER['HTTP_USER_AGENT'] . '</br>
        ';

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
        $this->email->subject('Informasi Login User ' . date("h:i:s A"));
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
            echo "Berhasil";
        } else {
            echo $this->email->print_debugger();
        }
    }


    //Halaman Index Auth (Login)
    public function index()
    {
        $this->form_validation->set_rules('npm', 'NPM', 'required|trim', [
            'required' => 'NPM harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password harus diisi!'
        ]);

        $data['web_motd'] = $this->db->get_where('web_status', ['id' => 1])->result_array();

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Masuk';
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth/footer');
        } else {
            //Validasi sukses
            $this->_login();
        }
    }
    //Function Login 
    private function _login()
    {
        $npm = $this->input->post('npm');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['npm' => $npm])->row_array();
        $web_status = $this->db->get_where('web_status', ['id' => 1])->row_array();

        if ($user) {
            //User ada
            if ($user['is_active'] == 1) {
                //Check password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'npm' => $user['npm'],
                        'role_id' => $user['role_id'],
                        'name' => $user['name'],
                    ];
                    $this->session->set_userdata($data);
                    //$this->_userloginSendMail();
                    $this->_userloginSendTelegram();
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        if ($user['role_id'] == 4) {
                            if ($web_status['up_status'] == 0) {
                                redirect('maintenance');
                                $this->session->unset_userdata($data);
                            } else {
                                redirect('bsosk');
                            }
                        }
                        if ($user['role_id'] == 3) {
                            if ($web_status['up_status'] == 0) {
                                redirect('maintenance');
                                $this->session->unset_userdata($data);
                            } else {
                                redirect('staffbem');
                            }
                        } else {
                            if ($user['role_id'] == 2) {
                                if ($web_status['up_status'] == 0) {
                                    redirect('maintenance');
                                    $this->session->unset_userdata($data);
                                } else {
                                    redirect('user');
                                }
                            }
                            if ($user['role_id'] == 5) {
                                if ($web_status['up_status'] == 0) {
                                    redirect('maintenance');
                                    $this->session->unset_userdata($data);
                                } else {
                                    redirect('dpm');
                                }
                            }
                        }
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                NPM atau Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akun belum diaktifkan!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            NPM atau Password salah!</div>');
            redirect('auth');
        }
    }
    //Halaman Registration 
    public function registration()
    {
        //NONAKTIF (BUKA USERADD PADA ADMIN UNTUK REGISTRATION)
        $data['title'] = 'Sub Menu Management';
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
            /* Code Asli
            $data['title'] = 'BEM UWKS - Daftar Akun';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer'); */

            $this->load->view('auth/blocked');
        } else {
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
                'kelas' => $this->input->post('kelas')

            ];
            $userdirectory = "./assets/user_directory/";
            $directory = mkdir($userdirectory . $data['npm'], 0777);

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat, Akun berhasil didaftarkan!</div>');
            redirect('auth');
        }
    }

    //Halaman Lupa Password.
    public function forgotpassword()
    {
        $data['title'] = 'Lupa Password';
        $this->load->view('templates/auth/header', $data);
        $this->load->view('auth/forgotpassword');
        $this->load->view('templates/auth/footer');
    }

    //Function Logout.
    public function logout()
    {
        $this->session->unset_userdata('npm');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Logout berhasil!</div>');
        redirect('auth');
    }

    //Halaman Blocked (Unauthorized Access).
    public function blocked()
    {
        $data['title'] = 'Blocked';
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $user = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();

        //$this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        //$this->load->view('templates/topbar', $data);
        $this->load->view('auth/blocked', $data);
    }
}