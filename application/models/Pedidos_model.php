<?php

class Pedidos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($empresa, $status = false, $where = false)
    {
        $this->db->where('empresa_id', $empresa);
        $this->db->where('status', 'aberto');
        
        if($where):
            $this->db->where('pedido_id', $where);
            $query = $this->db->get('tb_pedidos');
            return $query->row();
        endif;
        
        if($status):
            $this->db->where('status', $status);
            $query = $this->db->get('tb_pedidos');
            return $query->result();
        endif;
        $query = $this->db->get('tb_pedidos');
        return $query->result();
    }
    
    public function pedidos_produtos($empresa, $pedido)
    {
        $this->db->select('tb_produtos.*, tb_produtos_pedidos.*');
        $this->db->from('tb_produtos');
        $this->db->join('tb_produtos_pedidos', 'tb_produtos_pedidos.produto_id=tb_produtos.produto_id');
        $query = $this->db->get();
        return $query->result();
    }


}