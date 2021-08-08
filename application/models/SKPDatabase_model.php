<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SISTEM TERINTEGRASI BEM FK UWKS
// SKP DATABASE MODEL
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Model akan fetch seluruh data SKP mahasiswa untuk ditampilkan.

class SKPDatabase_model extends CI_Model
{
    //Function Statistic SKP B Pending (Mendapatkan seluruh data SKP B yang masih pending oleh Mahasiswa).
    public function GetStatListSKPDataBPending()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT COUNT(id)
                   FROM `validation_skp_user_pending`
                   WHERE `npm` = $npm
                   AND `status` = 0
        ";
        return $this->db->query($query)->result_array();
    }
    //Function Statistic SKP B Rejected (Mendapatkan seluruh data SKP B yang masih ditolak oleh Mahasiswa).
    public function GetStatListSKPDataBRejected()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT COUNT(id)
                   FROM `validation_skp_user_pending`
                   WHERE `npm` = $npm
                   AND `status` = 2
        ";
        return $this->db->query($query)->result_array();
    }
    //Function Statistic SKP B Accepted (Mendapatkan seluruh data SKP B yang sudah diterima oleh Mahasiswa).
    public function GetStatListSKPDataBAccepted()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT COUNT(id)
                   FROM `validation_skp_user_pending`
                   WHERE `npm` = $npm
                   AND `status` = 1
        ";
        return $this->db->query($query)->result_array();
    }
    //Function SKP B (Mendapatkan seluruh data SKP B oleh Mahasiswa).
    public function GetListSKPDataB()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT *
                   FROM `total_user_skp_b`
                   WHERE `npm` = $npm
        ";
        return $this->db->query($query)->result_array();
    }
    //Function SKP B (Menjumlahkan bobot total SKP B dari Mahasiswa).
    public function SumTotalSKPUserB()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT SUM(bobot)
                   FROM `total_user_skp_b`
                   WHERE `npm` = $npm
        ";
        return $this->db->query($query)->row_array();
    }
    //Function SKP A (Mendapatkan seluruh data SKP A oleh Mahasiswa).
    public function GetListSKPDataA()
    {
        /*$npm = $this->session->userdata('npm');
        $query = "SELECT *
                   FROM `total_user_skp_a`
                   WHERE `npm` = $npm
        ";
        return $this->db->query($query)->result_array();*/
        $npm = $this->session->userdata('npm');
        $query = "SELECT *
                   FROM `total_user_skp_a` JOIN `skp_a_ref`
                   ON total_user_skp_a.`skp_a_ref` = skp_a_ref.`id`
                   WHERE total_user_skp_a.`npm` = $npm
        ";
        return $this->db->query($query)->result_array();
    }
    //Function SKP A (Menjumlahkan bobot total SKP A dari Mahasiswa).
    public function SumTotalSKPUserA()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT SUM(bobot)
                   FROM `total_user_skp_a`
                   WHERE `npm` = $npm
        ";
        return $this->db->query($query)->row_array();
    }
    //Function SKP Requirements (Melihat minimal SKP per angkatan).
    public function GetSKPRequirements()
    {
        $userinfo = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $angkatan = $userinfo['angkatan'];
        $query = "SELECT `skp_min`
        FROM `skp_req`
        WHERE `angkatan` = $angkatan
        ";
        return $this->db->query($query)->row_array();
    }
    //Function Validation User Data (Mendapatkan seluruh data SKP yang dalam tahap validasi oleh Mahasiswa).
    public function GetListValidationUserData()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT *
                   FROM `validation_skp_user_pending`
                   WHERE `npm` = $npm
                   ORDER BY `id` DESC
        ";
        return $this->db->query($query)->result_array();
    }
    //Function All SKP Data (Mendapatkan seluruh data SKP oleh seluruh Mahasiswa yang belum tervalidasi).
    public function GetListAllSKPData()
    {
        $query = "SELECT *
                   FROM `validation_skp_user_pending`
                   WHERE `status` = 0
        ";
        return $this->db->query($query)->result_array();
    }
    //Function All SKP Data (Mendapatkan seluruh data SKP oleh seluruh Mahasiswa yang belum tervalidasi).
    public function GetUserSKPValidationData()
    {
        $query = "SELECT *
                   FROM `validation_skp_user_pending`
                   WHERE `status` = 0
        ";
        return $this->db->query($query)->result_array();
    }

    //Function Specific Name SKP Validation Data (Mendapatkan data terkait Mahasiswa yang berhubungan dengan data SKP (data mahasiswa) ).
    public function GetSpecificNameSKPValidationData()
    {
        $npm = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `user`
                   WHERE `npm` = $npm
        ";
        return $this->db->query($query)->row_array();
    }
    //Function Specific User SKP Validation Data (Mendapatkan data terkait Mahasiswa yang berhubungan dengan data SKP(id mahasiswa) ).
    public function GetSpecificUserSKPValidationData()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `validation_skp_user_pending`
                   WHERE `id` = $id
        ";
        return $this->db->query($query)->result_array();
    }
    //Function Get Specific User SKP Validation Status (Mendapatkan status aktif atau tidaknya pengajuan SKP) **Keperluan validate agar tidak bisa diakses oleh user lain**
    public function GetSpecificUserSKPValidationStatus()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT `status`
                   FROM `validation_skp_user_pending`
                   WHERE `id` = $id
        ";
        return $this->db->query($query)->row_array();
    }
    //Function Get Specific User SKP Validation NPM (Mendapatkan data NPM mahasiswa yang mengajukan) **Keperluan validate agar tidak bisa diakses oleh user lain**
    public function GetSpecificUserSKPValidationNPM()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT `npm`
                   FROM `validation_skp_user_pending`
                   WHERE `id` = $id
        ";
        return $this->db->query($query)->row_array();
    }
    //Function Specific User Validation Proof (Mendapatkan data sertifikat/bukti terkait dengan SKP).
    public function GetSpecificUserSKPValidationProof()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT `skp_proof`
                   FROM `validation_skp_user_pending`
                   WHERE `id` = $id
        ";
        return $this->db->query($query)->row_array();
    }
    //Function Count All SKP (Menghitung seluruh data SKP oleh Mahasiswa).
    public function CountAllSKPList()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT COUNT(id)
                   FROM `total_user_skp_a`
                   WHERE `npm` = $npm
        ";
        return $this->db->query($query)->row_array();
    }
    //Function Percentage All SKP (Menghitung persentase SKP mahasiswa).
    public function PercentageAllSKP()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT COUNT(id)
                   FROM `total_user_skp_b`
                   WHERE `npm` = $npm
        ";
        return $this->db->query($query)->row_array();
    }

    /*public function GetListSKPDataAForInput()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `total_user_skp_a`
                   WHERE `id` = $id
        ";
        return $this->db->query($query)->result_array();
    } */

    public function GetListSKPDataAForInput()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `user` JOIN `total_user_skp_a`
                   ON user.`npm` = total_user_skp_a.`npm`
                   WHERE user.`id` = $id
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetListSKPDataBForInput()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `user` JOIN `total_user_skp_b`
                   ON user.`npm` = total_user_skp_b.`npm`
                   WHERE user.`id` = $id
        ";
        return $this->db->query($query)->result_array();
    }
}
