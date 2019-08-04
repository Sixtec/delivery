<?php 
class Produtos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->verificarLogin();
        $this->load->model('produtos_model');
    }
    
    public function index() {
        $this->painel();
    }
    
    public function painel()
    {
        $this->data['produtos'] = $this->produtos_model->buscar();
        carregarPaginasEmpresas('empresas/produtos/painel', $this, $this->data);
    }
    
    public function adicionar()
    {
        carregarPaginasEmpresas('empresas/produtos/adicionar', $this);

        if($this->input->post()):
            $image = 'default.png';
            
            if($_FILES['thumb']['name'] != null):
                if($u = $this->upload($_FILES['thumb'])):
                    $image = $u;
                endif;
            endif; 
            
            $data = $this->input->post();
            $data['preco_venda'] = str_replace(['R$', '_', ','], ['', '', '.'], $data['preco_venda']);
            $data['thumb'] = $image;
            
            if($this->produtos_model->adicionar($data)):
                $this->session->set_flashdata('sucesso', 'Produto adicionado com sucesso!');
                redirect(base_url('empresas/produtos'));
            else:
                $this->session->set_flashdata('erro', 'Erro ao adicionar produto!');
                redirect(base_url('empresas/produtos/adicionar'));
            endif;
        endif;
    }
    
    public function visualizar()
    {
        if($this->uri->segment(4)):
            $this->data['produto'] = $this->produtos_model->buscar(['produto_id' => $this->uri->segment(4)]);
            carregarPaginasEmpresas('empresas/produtos/visualizar', $this, $this->data);
        endif;
    }
    
    public function editar()
    {
        if($this->uri->segment(4)):
            $this->data['produto'] = $this->produtos_model->buscar(['produto_id' => $this->uri->segment(4)]);
            carregarPaginasEmpresas('empresas/produtos/editar', $this, $this->data);
            
            if($this->input->post()):
                $image = $this->data['produto']->thumb;
                
                if($_FILES['thumb']['name'] != null):
                    if($u = $this->upload($_FILES['thumb'])):
                        $this->deletarImagem(($image));
                        $image = $u;
                    endif;
                endif;
                
                $data = $this->input->post();
                $data['preco_venda'] = str_replace(['R$', '_', ','], ['', '', '.'], $data['preco_venda']);
                $data['thumb'] = $image;
                
                if($this->produtos_model->editar($data, $this->data['produto']->produto_id)):
                    $this->session->set_flashdata('sucesso', 'Produto alterado com sucesso!');
                    redirect(base_url('empresas/produtos/visualizar/'.$this->data['produto']->produto_id));
                else:
                    $this->session->set_flashdata('erro', 'Erro ao editar produto!');
                    redirect(base_url('empresas/produtos/editar'.$this->data['produto']->produto_id));
                endif;
            endif; 
            
        endif;
    }
    
    public function excluir()
    {
        if($this->uri->segment(4)):
            $this->data['produto'] = $this->produtos_model->buscar(['produto_id' => $this->uri->segment(4)]);
            $imagem  = $this->data['produto']->thumb;
            if($this->produtos_model->excluir($this->uri->segment(4))):
                $this->deletarImagem(($this->data['produto']->thumb));
                $this->session->set_flashdata('sucesso', 'Produto excluído com sucesso!');
                redirect(base_url('empresas/produtos/'));
            else:
                $this->session->set_flashdata('erro', 'Erro ao excluir produto!');
                redirect(base_url('empresas/produtos/'));
            endif;
        else:
            $this->session->set_flashdata('erro', 'Erro na passagem do id!');
            redirect(base_url('empresas/produtos/'));
        endif;
    }
    
    public function categorias()
    {
        $this->data['categorias'] = $this->produtos_model->categorias();
        carregarPaginasEmpresas('empresas/produtos/categorias', $this, $this->data);
    }

    public function upload($image)
    {
        $pasta = FCPATH.'/assets/empresas/dist/img/produtos/';
        chmod($pasta, 0755);
        
        $image_name  = date('dmYHis');
        $image_ext      = pathinfo( $image['name'], PATHINFO_EXTENSION);

        $configuracao = array(
            'upload_path'   => $pasta,
            'allowed_types' => '*',
            'file_name'     => $image_name.'.'.$image_ext,
            'max_size'      => '2000'
        );

        $this->load->library('upload');
        $this->upload->initialize($configuracao);

        if ($this->upload->do_upload('thumb')):
            return $configuracao['file_name'];
        else:
            return $this->upload->display_errors();
        endif;
    }

    public function deletarImagem($imagem)
    {
        $pasta = FCPATH.'/assets/empresas/dist/img/produtos/';
        chmod($pasta, 0755);
        unlink($pasta.$imagem);
    } 

    public function verificarLogin()
    {
        if(!$this->session->empresa):
            redirect(base_url('empresas/login'));
        endif;
    }
}