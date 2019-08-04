<?php 

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }
    
    public function index()
    {
        $this->session->empresa ? redirect(base_url('empresas/painel')) : $this->load->view('empresas/login');
        
        if($this->input->post()):
            $this->autenticarEmpresa();
        endif;
    }

    public function autenticarEmpresa()
    {
        $usuario = $this->input->post('usuario');
        $senha   = $this->input->post('senha');

        if($c = $this->login_model->autenticarEmpresa($usuario, $senha)):
            $this->session->set_userdata('empresa', $c);
            redirect(base_url('empresas/painel'));
        else:
            redirect(base_url('empresas/login'));
        endif;
    }

    public function logout()
    {
        session_destroy();
        redirect('empresas/login');
    }
}