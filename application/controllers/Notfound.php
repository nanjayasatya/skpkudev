<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SKP-KU BEM FK UWKS
// 404 CONTROLLER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

class Notfound extends CI_Controller
{
    //Halaman Index Error 404.
    public function index()
    {
        $this->load->view('notfound/404');
    }

    //Return ke homepage masing-masing
    public function return()
    {
        $userdata = $this->session->userdata();
        $roleid = $userdata['role_id'];
        if ($roleid == 1) {
            redirect('admin');
        } else if ($roleid == 3) {
            redirect('staffbem');
        } else if ($roleid == 4) {
            redirect('bsosk');
        } else if ($roleid == 5) {
            redirect('dpm');
        } else {
            redirect('user');
        }
    }
}
