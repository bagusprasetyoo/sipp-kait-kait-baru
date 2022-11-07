<?php

//helper untuk mengecek apakah sudah melakukan login
function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('idpengguna');
    if ($user_session) {
        redirect('dashboard');
    }
}

//helper untuk mengecek apakah belum melakukan login
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('idpengguna');
    if (!$user_session) {
        redirect('landingpage');
    }
}

//helper untuk mengecek apakah rolenya bukan sebagai Admin
function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role != 'Admin') {
        redirect('dashboard');
    }
}

//helper untuk mengecek apakah rolenya bukan sebagai Pengguna
function check_pengguna()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role != 'Pengguna') {
        redirect('dashboard');
    }
}

//helper untuk mengecek apakah rolenya bukan sebagai RT
function check_rt()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role != 'RT') {
        redirect('dashboard');
    }
}

//helper untuk mengecek apakah rolenya bukan sebagai RW
function check_kades()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role != 'Kepala Desa') {
        redirect('dashboard');
    }
}
