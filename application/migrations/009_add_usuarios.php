<?php

class Migration_Add_Usuarios extends CI_Migration {

    public function up() {
        $fields = array(
            'usuario_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'nome' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'thumb' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'cpf' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'endereco' => array(
                'type' => 'VARCHAR', 
                'constraint' => 255
            ),
            'cidade' => array(
                'type' => 'INT',
                'constraint' => 10,
            ),
            'senha' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'validado' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
        );
    
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('usuario_id', TRUE);
        $this->dbforge->create_table('tb_usuarios', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_usuarios');
    }

}