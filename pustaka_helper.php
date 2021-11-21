<?php

function cek_login()
{
    $ci = get_instance();

}   if (!$ci->session->userdata('email')) {
    $ci->session->set_flashdata('pesan',  <div class="alert
alert-danger" role= "alert" akses ditolak. anda belum login!!
</div>');
}