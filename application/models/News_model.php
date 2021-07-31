<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SISTEM TERINTEGRASI BEM FK UWKS
// NEWS MODEL
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Model akan fetch seluruh data berita untuk ditampilkan.

class News_model extends CI_Model
{
    //Function Get News (Mendapatkan seluruh data berita).
    public function getNews()
    {

        return $this->db->get('news')->result_array();
    }
    //Function Get News Page (Mengurutkan seluruh data berita).
    public function getNewsPage($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('news', $limit, $start)->result_array();
    }
    //Function Count All News (Mendapatkan seluruh data berita).
    public function countAllNews()
    {
        return $this->db->get('news')->num_rows();
    }
}
