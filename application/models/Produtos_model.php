<?php

class Produtos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($empresa, $where = false)
    {
        $this->db->where('empresa_id', $empresa);
        if($where):
            $this->db->where('produto_id', $where);
            $query = $this->db->get('tb_produtos');
            return $query->row();
        endif;
        $query = $this->db->get('tb_produtos');
        return $query->result();
    }

    public function buscar_categorias($where = false)
    {
        $this->db->order_by('descricao','ASC');
        if($where):
            $this->db->where('categoria_id', $where);
            $query = $this->db->get('tb_categorias_produtos');
            return $query->row();
        endif;
        $query = $this->db->get('tb_categorias_produtos');
        return $query->result();
    }

    public function adicionar($data)
    {
        if($this->db->insert('tb_produtos', $data)):
            return true;
        endif;
        return false;
    }

    public function editar($empresa, $data, $id)
    {
        $this->db->where('empresa_id', $empresa);
        $this->db->where('produto_id', $id);
        if($this->db->update('tb_produtos', $data)):
            return true;
        endif;
        return false;
    }
    
    public function excluir($empresa, $id)
    {
        $this->db->where('empresa_id', $empresa);
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