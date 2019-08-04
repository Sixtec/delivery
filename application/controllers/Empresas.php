<?php

class Empresas extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

        $this->verificarLogin();
        $this->load->model('login_model');
    }
    
    public function index()
    {
        $this->painel();
    }
    
    public function painel()
    {
        carregarPaginasEmpresas('empresas/empresas/painel', $this);
    }
    
    public function cardapio()
    {
        carregarPaginasEmpresas('empresas/cardapio', $this, $data);
    }
    
    public function verificarLogin()
    {
        if(!$this->session->empresa):
            redirect(base_url('empresas/login'));
        endif;
    }
}