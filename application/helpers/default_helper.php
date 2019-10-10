<?php

function carregarPaginasEmpresas($pagina, $obj, $data = array())
{
    $obj->load->view('empresas/templates/header', $data);
    $obj->load->view($pagina);
    $obj->load->view('empresas/templates/aside');
    $obj->load->view('empresas/templates/footer');
}

function carregarPaginasUsuarios($pagina, $obj, $data = array())
{
    $obj->load->view('usuarios/templates/header', $data);
    $obj->load->view($pagina);
    $obj->load->view('usuarios/templates/aside');
    $obj->load->view('usuarios/templates/footer');
}

function verificarLogin($obj)
{
    if(!$obj->session->userdata['empresa']):
        redirect(base_url('empresas/login'));
    endif;
}