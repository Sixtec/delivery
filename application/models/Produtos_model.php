<?php

class Produtos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($where = false)
    {
        if($where):
            $this->db->where($where);
            $query = $this->db->get('tb_produtos');
            return $query->row();
        endif;
        $query = $this->db->get('tb_produtos');
        return $query->result();
    }
    
    public function adicionar($data)
    {
        if($this->db->insert('tb_produtos', $data)):
            return true;
        endif;
        return false;
    }

    public function editar($data, $id)
    {
        $this->db->where('produto_id', $id);
        if($this->db->update('tb_produtos', $data)):
            return true;
        endif;
        return false;
    }
    
    public function excluir($id)
    {
        $this->db->where('produto_id', $id);
        if($this->db->delete('tb_produtos')):
            return true;
        endif;
        return false;
    }
    
    public function categorias($where = false)
    {
        if($where):
            $this->db->where($where);
            $query = $this->db->get('tb_categorias_produtos');
            return $query->row();
        endif;
        $query = $this->db->get('tb_categorias_produtos');
        return $query->result();
    }

}