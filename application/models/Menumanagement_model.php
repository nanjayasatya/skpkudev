<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SISTEM TERINTEGRASI BEM FK UWKS
// Menu Management MODEL
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Model untuk mendapatkan data Menu untuk konfigurasi website di halaman Admin.

class Menumanagement_model extends CI_Model
{
    //Function Get Data Menu (Mendapatkan data User Sub Menu).
    public function getDataMenu()
    {
        return $this->db->get('user_sub_menu')->result_array();
    }
    //Function Get Data Menu Page(Mendapatkan data User Sub Menu).
    public function getDataMenuPage($limit, $start)
    {
        return $this->db->get('user_sub_menu', $limit, $start)->result_array();
    }
    //Function Count All Data Menu (Mendapatkan data User Sub Menu).
    public function countAllDataMenu()
    {
        return $this->db->get('user_sub_menu')->num_rows();
    }
}
