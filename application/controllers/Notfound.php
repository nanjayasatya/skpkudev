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
}
