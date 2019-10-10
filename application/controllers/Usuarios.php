<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->verificaLogin();
    }

    public function index()
    {
        $this->painel();
    }

    public function painel()
    {
        carregarPaginasUsuarios('usuarios/usuarios/painel', $this);

    }

    public function verificaLogin()
    {
        if(!$this->session->usuario):
            redirect(base_url('usuarios/login'));
        endif;
    }
}