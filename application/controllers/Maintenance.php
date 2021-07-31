<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// MAINTENANCE CONTROLLER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

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
