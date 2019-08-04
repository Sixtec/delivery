<?php

class Migration_Add_Produtos extends CI_Migration {

    public function up() {
        $fields = array(
            'produto_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'nome' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'categoria' => array(
                'type' => 'INT',
                'constraint' => 5,
            ),
            'descricao' => array(
                'type' => 'TEXT',
            ),
            'preco_venda' => array(
                'type' => 'FLOAT',
                'constraint' => '10',
            ),
            'observacao' => array(
                'type' => 'TEXT',
            ),
             'medida' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
            ),
            'thumb' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'ativo' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
        );
    
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('produto_id', TRUE);
        $this->dbforge->create_table('tb_produtos', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_produtos');
    }

}