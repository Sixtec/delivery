<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->verificarLogin($this);
        $this->load->model('pedidos_model');
        $this->load->model('produtos_model');
        $this->empresa_id = $this->session->userdata['empresa']->empresa_id;
    }

    public function index()
    {
        $status = false;
        if($this->input->get('status')):
            switch ($this->input->get('status')) {
                case 'aberto':
                    $status = 'aberto';
                    break;
                case 'recebido':
                    $status = 'recebido';
                    break;
                case 'preparando':
                    $status = 'preparando';
                    break;
                case 'enviado':
                    $status = 'enviado';
                    break;
                case 'finalizado':
                    $status = 'finalizado';
                    break;
                default:
                    $status = false;
            }
        endif;
        $this->data['pedidos'] = $this->pedidos_model->buscar($this->empresa_id,$status);
        carregarPaginasEmpresas('empresas/pedidos/painel', $this, $this->data);
    }
    
    public function visualizar()
    {
        if($this->uri->segment(4)):
            $this->data['pedido'] = $this->pedidos_model->buscar(
                $this->empresa_id,
                false,
                $this->uri->segment(4)
            );
            $this->data['produtos_pedido'] = $this->pedidos_model->pedidos_produtos($this->empresa_id, $this->uri->segment(4));
            carregarPaginasEmpresas('empresas/pedidos/visualizar', $this, $this->data);
        endif;
    }

    public function aceitar()
    {
        if($this->uri->segment(4)):
            $this->pedidos_model->aceitar($this->empresa_id, $this->uri->segment(4));
        endif;
    }
    
    public function rejeitar()
    {
        if($this->uri->segment(4)):
            $this->pedidos_model->rejeitar($this->empresa_id, $this->uri->segment(4));
        endif;
    }

    public function verificarLogin()
    {
        if(!$this->session->empresa):
            redirect(base_url('empresas/login'));
        endif;
    }

    // METODOS PARA ÁREA DOS CLIENTE

}