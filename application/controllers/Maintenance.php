<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// MAINTENANCE CONTROLLER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

//SENTRY ERROR REPORTING
Sentry\init(['dsn' => 'https://4a7f7e1d5885447288e0031d20183b17@o1054582.ingest.sentry.io/6040032' ]);

class Maintenance extends CI_Controller
{
    //Halaman Index Maintenance.
    public function index()
    {
        $web_status = $this->db->get_where('web_status', ['id' => 1])->row_array();
        if ($web_status['up_status'] == 0) {
            $this->session->unset_userdata('npm');
            $this->session->unset_userdata('role_id');
            $this->session->unset_userdata('email');
        $this->load->view('maintenance/index');
        } else {
            $this->session->unset_userdata('npm');
            $this->session->unset_userdata('role_id');
            $this->session->unset_userdata('email');
            redirect('auth');
        }
    }
}
