<?php 

class LoginUsuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('loginUsuarios_model');
    }
    
    public function index()
    {
        $this->session->usuarios ? redirect(base_url('usuarios/painel')) : $this->load->view('usuarios/login');
        
        if($this->input->post()):
            $this->autenticarUsuario();
        endif;
    }

    public function autenticarUsuario()
    {
        $usuario = $this->input->post('usuario');
        $senha   = $this->input->post('senha');

        if($c = $this->loginUsuarios_model->autenticarUsuario($usuario, $senha)):
            $this->session->set_userdata('usuario', $c);
            redirect(base_url('usuarios/painel'));
        else:
            redirect(base_url('usuarios/login'));
        endif;
    }

    public function logout()
    {
        session_destroy();
        redirect('usuarios/login');
    }
}