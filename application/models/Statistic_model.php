<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SISTEM TERINTEGRASI BEM FK UWKS
// SKP DATABASE MODEL
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Model akan fetch seluruh data terkait dengan penampilan statistik untuk website.

class Statistic_model extends CI_Model
{
    // Function Total Pending SKP Validation Data (Mendapatkan total data SKP yang masih dalam tahap validasi).
    public function GetTotalPendingSKPValidationData()
    {
        $query = "SELECT COUNT(id)
                  FROM `validation_skp_user_pending`
                  WHERE `status` = 0
        ";
        return $this->db->query($query)->row_array();
    }
    // Function Total Mahasiswa Data (Mendapatkan total seluruh Mahasiswa yang terdaftar).
    public function GetTotalMahasiswaData()
    {
        $query = "SELECT COUNT(id)
                  FROM `user`
                  WHERE `role_id` = 2
        ";
        return $this->db->query($query)->row_array();
    }
    // Function Total BEM (Mendapatkan total seluruh BEM yang terdaftar).
    public function GetTotalBEM()
    {
        $query = "SELECT COUNT(id)
                  FROM `user`
                  WHERE `role_id` = 3
        ";
        return $this->db->query($query)->row_array();
    }
    // Function Total BSO (Mendapatkan total seluruh BSO yang terdaftar).
    public function GetTotalBSO()
    {
        $query = "SELECT COUNT(id)
                  FROM `user`
                  WHERE `role_id` = 4
        ";
        return $this->db->query($query)->row_array();
    }

    public function GetTotalEvent()
    {
        $query = "SELECT *
                  FROM `event_data`
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetTotalEventDataBSOSK()
    {
        $pelaksana = $this->db->get_where('event_org', ['pelaksana' => $this->session->userdata('name')])->row_array();
        if ($pelaksana['pelaksana'] == 'BEM') {
            $pel = '1';
        } else {
            if ($pelaksana['pelaksana'] == 'DPM') {
                $pel = '2';
            } else {
                if ($pelaksana['pelaksana'] == 'PHD') {
                    $pel = '3';
                } else {
                    if ($pelaksana['pelaksana'] == 'EMR') {
                        $pel = '4';
                    } else {
                        if ($pelaksana['pelaksana'] == 'METEORA') {
                            $pel = '5';
                        } else {
                            if ($pelaksana['pelaksana'] == 'SKI') {
                                $pel = '6';
                            } else {
                                if ($pelaksana['pelaksana'] == 'SKK') {
                                    $pel = '7';
                                } else {
                                    if ($pelaksana['pelaksana'] == 'PMK') {
                                        $pel = '8';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $query = "SELECT COUNT(id)
                  FROM `event_data`
                  WHERE `pelaksana` = '$pel'
        ";
        return $this->db->query($query)->row_array();
    }
}
