<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('idpengguna');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('idpengguna');
    if (!$user_session) {
        redirect('landingpage');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role != 'Admin') {
        redirect('dashboard');
    }
}
