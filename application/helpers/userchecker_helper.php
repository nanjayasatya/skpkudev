<?php

// SISTEM TERINTEGRASI BEM FK UWKS
// USERCHECKER HELPER
// DEVELOPED BY NYOMAN SATIYA NANJAYA SADHA (2018D)
// @nanjayasatya

// Helper akan mencari info Role ID user dan akan mengarahkan user ke halaman sesuai dengan Role ID.
// Helper juga akan memeriksa apakah website dalam mode maintenance.

//Function Check Session Info (Berdasarkan Role ID + Web Status)
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('npm')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $web_status = $ci->db->get_where('web_status', ['id' => 1])->row_array();
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);
        $up_status = $ci->db->get_where('web_status', ['up_status' => $web_status['up_status']]);

        if ($web_status['up_status'] == 0) {
            if ($role_id == 1) {
                if ($userAccess->num_rows() < 1) {
                    redirect('auth/blocked');
                }
            }
            if ($role_id == 2) {
                redirect('maintenance');
                if ($userAccess->num_rows() < 1) {
                    redirect('maintenance');
                }
            }
            if ($role_id == 3) {
                redirect('maintenance');
                if ($userAccess->num_rows() < 1) {
                    redirect('maintenance');
                }
            }
            if ($role_id == 4) {
                redirect('maintenance');
                if ($userAccess->num_rows() < 1) {
                    redirect('maintenance');
                }
            }
            if ($role_id == 5) {
                redirect('maintenance');
                if ($userAccess->num_rows() < 1) {
                    redirect('maintenance');
                }
            }
        } else {
            if ($web_status['up_status'] == 1) {
                if ($userAccess->num_rows() < 1) {
                    redirect('auth/blocked');
                }
            }
        }
    }
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();


    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function checkproposal_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $proposal_status = $dataproposal['proposal_status'];

    if ($proposal_status > 0) {
        return "checked='checked'";
    }
}

function checkizinkegiatan_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $izinkegiatan_status = $dataproposal['izinkegiatan_status'];

    if ($izinkegiatan_status > 0) {
        return "checked='checked'";
    }
}

function checkpengesahanskp_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $pengesahanskp_status = $dataproposal['pengesahanskp_status'];

    if ($pengesahanskp_status > 0) {
        return "checked='checked'";
    }
}

function checkbantuandana_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $bantuandana_status = $dataproposal['bantuandana_status'];

    if ($bantuandana_status == 1) {
        return "checked='checked'";
    }
}

function checkpeminjamanproperti_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $peminjamanproperti_status = $dataproposal['peminjamanproperti_status'];

    if ($peminjamanproperti_status == 1) {
        return "checked='checked'";
    }
}

function checknotpeminjamanruangan_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $notpeminjamanruangan_status = $dataproposal['peminjamanruangan_status'];

    if ($notpeminjamanruangan_status == 2) {
        return "checked='checked'";
    }
}

function checkpeminjamanruangan_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $peminjamanruangan_status = $dataproposal['peminjamanruangan_status'];

    if ($peminjamanruangan_status == 1) {
        return "checked='checked'";
    }
}

function checknotbantuandana_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $notbantuandana_status = $dataproposal['bantuandana_status'];

    if ($notbantuandana_status == 2) {
        return "checked='checked'";
    }
}

function checknotpeminjamanproperti_status()
{
    $ci = get_instance();

    $dataproposal = $ci->db->get_where('validation_proposal_pending', ['id' => $ci->uri->segment(3)])->row_array();
    $notpeminjamanproperti_status = $dataproposal['peminjamanproperti_status'];

    if ($notpeminjamanproperti_status == 2) {
        return "checked='checked'";
    }
}
