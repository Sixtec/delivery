<?php

class LoginUsuarios_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function autenticarUsuario($usuario, $senha)
    {
        $this->db->where('email', $usuario);
        $this->db->where('senha', md5($senha));

        $query = $this->db->get('tb_usuarios');
        if($query->num_rows() == 1):
            return $query->row();
        else:
            return false;
        endif;
    }

}