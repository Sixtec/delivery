<?php

class Migration_Add_Empresas extends CI_Migration {

    public function up() {
        $fields = array(
            'empresa_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'razao_social' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'nome_fantasia' => array(
                'type' => 'TEXT',
            ),
            'cnpj' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'ie' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'endereco' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'cidade' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'estado' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            ),
            'senha' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'thumb' => array(
                'type' => 'TEXT',
            )
        );
    
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('empresa_id', TRUE);
        $this->dbforge->create_table('tb_empresas', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_empresas');
    }

}