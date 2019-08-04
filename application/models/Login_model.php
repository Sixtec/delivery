<?php

class Login_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function autenticarEmpresa($usuario, $senha)
    {
        $this->db->select('nome_fantasia, cnpj, endereco, cidade, estado, email');
        $this->db->where('email', $usuario);
        $this->db->where('senha', md5($senha));

        $query = $this->db->get('tb_empresas');
        if($query->num_rows() == 1):
            return $query->row();
        else:
            return false;
        endif;
    }

}