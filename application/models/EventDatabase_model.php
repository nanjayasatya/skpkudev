<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EventDatabase_model extends CI_Model
{
    public function GetEventOrgData()
    {
        $npm = $this->session->userdata('npm');
        $query = "SELECT *
                   FROM `event_org`
                   WHERE `pelaksana` = '$npm' 
        ";
        return $this->db->query($query)->row_array();
    }
    public function GetListEventData()
    {
        $eventorg = $this->db->get_where('event_org', ['pelaksana' => $this->session->userdata('name')])->row_array();
        $id = $eventorg['id'];
        $query = "SELECT *
                   FROM `validation_event_pending`
                   WHERE `pelaksana` = '$id'
        ";
        return $this->db->query($query)->result_array();
    }
    public function GetSpecificEventValidationData()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `validation_event_pending` JOIN `event_org`
                   ON validation_event_pending.`pelaksana` = `bso_id`
                   WHERE validation_event_pending.`id` = $id
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetSpecificProposalValidationData()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT *
                   FROM `validation_proposal_pending` JOIN `event_org`
                   ON validation_proposal_pending.`pelaksana` = `bso_id`
                   WHERE validation_proposal_pending.`id` = $id
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetListAllEventData()
    {
        $query = "SELECT validation_event_pending.`id`, `name`, `tahun`, event_org.`pelaksana`, validation_event_pending.`status`
                   FROM `validation_event_pending` JOIN `event_org`
                   ON validation_event_pending.`pelaksana` = event_org.`bso_id`
                   WHERE `status` = 0
        ";
        return $this->db->query($query)->result_array();
    }

    public function CountAllValidationEventData()
    {
        $query = "SELECT COUNT(id)
                   FROM `validation_event_pending`
                   WHERE `status` = 0
        ";
        return $this->db->query($query)->row_array();
    }

    public function GetListAllEventOrg()
    {
        $query = "SELECT *
                   FROM `event_org`
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetListAllValidationProposalData()
    {
        $query = "SELECT validation_proposal_pending.`id`,`name`,`tahun`, event_org.`pelaksana`, validation_proposal_pending.`status`
        FROM `validation_proposal_pending` JOIN `event_org`
        ON validation_proposal_pending.`pelaksana` = event_org.`bso_id`
        WHERE `status` = 0 OR `status` = 5
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetListAllValidationSertifData()
    {
        $query = "SELECT validation_sertif_pending.`id`,`name`,`tahun`, event_org.`pelaksana`, validation_sertif_pending.`status`
        FROM `validation_sertif_pending` JOIN `event_org`
        ON validation_sertif_pending.`pelaksana` = event_org.`bso_id`
        WHERE `status` = 0 OR `status` = 5
        ";
        return $this->db->query($query)->result_array();
    }



    public function GetListValidationProposalData()
    {
        $eventorg = $this->db->get_where('event_org', ['pelaksana' => $this->session->userdata('name')])->row_array();
        $id = $eventorg['id'];
        $query = "SELECT *
        FROM `validation_proposal_pending`
        WHERE `pelaksana` = $id
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetListProposalAdmittedData()
    {
        $eventorg = $this->db->get_where('event_org', ['pelaksana' => $this->session->userdata('name')])->row_array();
        $id = $eventorg['id'];
        $query = "SELECT *
        FROM `validation_proposal_pending`
        WHERE `pelaksana` = $id
        AND `status` = 1
        ";
        return $this->db->query($query)->result_array();
    }

    public function GetSpecificProposalValidationPending()
    {
        $id = $this->uri->segment(3);
        $query = "SELECT * 
        FROM `validation_proposal_pending`
        WHERE `id` = $id
        ";
        return $this->db->query($query)->result_array();
    }

    //UPDATE KELENGKAPAN PROPOSAL
    public function UpdateProposalStatus()
    {
        $proposal_status = $this->input->post('proposal_status');
        $this->db->set('proposal_status', $proposal_status);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
    }

    public function UpdateIzinKegiatanStatus()
    {
        $izinkegiatan_status = $this->input->post('izinkegiatan_status');
        $this->db->set('izinkegiatan_status', $izinkegiatan_status);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
    }

    public function UpdatePengesahanSKPStatus()
    {
        $pengesahanskp_status = $this->input->post('pengesahanskp_status');
        $this->db->set('pengesahanskp_status', $pengesahanskp_status);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
    }

    public function UpdateBantuanDanaStatus()
    {
        $bantuandana_status = $this->input->post('bantuandana_status');
        $this->db->set('bantuandana_status', $bantuandana_status);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
    }

    public function UpdatePeminjamanPropertiStatus()
    {
        $peminjamanproperti_status = $this->input->post('peminjamanproperti_status');
        $this->db->set('peminjamanproperti_status', $peminjamanproperti_status);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
    }

    public function UpdatePeminjamanRuanganStatus()
    {
        $peminjamanruangan_status = $this->input->post('peminjamanruangan_status');
        $this->db->set('peminjamanruangan_status', $peminjamanruangan_status);
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('validation_proposal_pending');
    }

    //DPM
    public function GetListAllValidationProposalDataDPM()
    {
        $query = "SELECT validation_proposal_pending.`id`,`name`,`tahun`, event_org.`pelaksana`, validation_proposal_pending.`status`
        FROM `validation_proposal_pending` JOIN `event_org`
        ON validation_proposal_pending.`pelaksana` = event_org.`bso_id`
        WHERE `status` = 3 OR `status` = 6
        ";
        return $this->db->query($query)->result_array();
    }
}
