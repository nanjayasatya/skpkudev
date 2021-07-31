<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SISTEM TERINTEGRASI BEM FK UWKS
// MENU MODEL
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Model untuk mendapatkan data Menu untuk konfigurasi website di halaman Admin.

class Menu_model extends CI_Model
{
    //Function Get Sub Menu (Mendapatkan data User Sub Menu berdasarkan Menu ID untuk masing masing User).
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`. `id`
        ";
        return $this->db->query($query)->result_array();
    }
    //Function Data Menu Page (Mendapatkan data User Sub Menu berdasarkan Menu ID untuk masing masing User).
    public function getDataMenuPage($limit, $start)
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`. `id`
        ";
        return $this->db->query($query, $limit, $start)->result_array();
    }
    //Function Count All Data Menu (Mendapatkan data User Sub Menu berdasarkan Menu ID untuk masing masing User).
    public function countAllDataMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`. `id`
        ";
        return $this->db->query($query)->num_rows();
    }
}
