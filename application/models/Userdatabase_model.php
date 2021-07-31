<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SISTEM TERINTEGRASI BEM FK UWKS
// SKP DATABASE MODEL
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Model akan fetch seluruh data untuk menampilkan seluruh data tentang Mahasiswa.

class Userdatabase_model extends CI_Model
{
    //Function Get User Database (Mendapatkan seluruh data Mahasiswa *Exclude Admin, BEM dan BSO*).
    public function getUserDatabase()
    {
        $query = "SELECT *
                  FROM `user`
                  WHERE `role_id` = `2`
        ";

        return $this->db->query($query)->result_array();
    }
    //Function Get User Full Data (Mendapatkan seluruh data terkait Mahasiswa menurut ID Mahasiswa)
    public function getUserFullData()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `user`
                   WHERE `id` = $id
                   AND `role_id` = '2';
                   
        ";
        return $this->db->query($query)->result_array();
    }

    //Function nya masih ada error 1064 coba cek lagi.
    //Tambahkan untuk akun ADMIN, BEM dan BSO.
    //Function Update User (Mengupdate data Mahasiswa).
    public function updateUser()
    {

        $name = htmlspecialchars($this->input->post('name', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $npm = $this->input->post('npm');
        $angkatan = $this->input->post('angkatan');
        $kelas = $this->input->post('kelas');
        $id = $this->uri->segment(3);

        $query = "UPDATE `user`
                  SET `name` = $name,
                      `email` = $email, 
                      `npm` = $npm, 
                      `angkatan` = $angkatan,
                      `kelas` = $kelas
                  WHERE `id` = $id
        ";
        return $this->db->query($query);
    }
}
