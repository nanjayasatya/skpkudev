<?php
defined('BASEPATH') or exit('No direct script access allowed');

// SISTEM TERINTEGRASI BEM FK UWKS
// SKP DATABASE MODEL
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Model akan fetch seluruh data untuk menampilkan seluruh data tentang Mahasiswa.

class Userdatabase_model extends CI_Model
{
    var $table = 'user';
    var $skpa = 'total_user_skp_a';
    var $skpb = 'total_user_skp_b';
    var $column_order = array(null, 'id', 'name', 'npm', 'angkatan', 'kelas', 'email'); //set column field database for datatable orderable
    var $column_search = array('id', 'name', 'npm', 'angkatan', 'kelas', 'email'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 
    var $role_id = array('role_id' => '2');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $this->db->where('role_id =', 2);

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    private function _get_datatables_skp_a_query()
    {
        $this->db->from($this->skpa);

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function get_datatables_skpa()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function SumTotalSKPUserA($skpa)
    {
        $query = "SELECT SUM(bobot)
                   FROM `total_user_skp_a`
                   WHERE `npm` = $skpa
        ";
        $result = $this->db->query($query)->row_array();
        if ($result['SUM(bobot)'] == NULL) {
            return '0';
        } else {
            return $result['SUM(bobot)'];
        }
    }

    public function SumTotalSKPUserB($skpb)
    {
        $query = "SELECT SUM(bobot)
                   FROM `total_user_skp_b`
                   WHERE `npm` = $skpb
        ";
        $result = $this->db->query($query)->row_array();
        if ($result['SUM(bobot)'] == NULL) {
            return '0';
        } else {
            return $result['SUM(bobot)'];
        }
    }

    public function GetSKPRequirements($skpreq)
    {
        $angkatan = $skpreq;
        $query = "SELECT `skp_min`
        FROM `skp_req`
        WHERE `angkatan` = $angkatan
        ";
        $result = $this->db->query($query)->row_array();
        if ($result['skp_min'] == NULL) {
            return '0';
        } else {
            return $result['skp_min'];
        }
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        $this->db->where('role_id =', 2);
        return $this->db->count_all_results();
    }

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
