<?php

class Migration_Add_Categorias_Produtos extends CI_Migration {

    public function up() {
        $fields = array(
            'categoria_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'descricao' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            )
        );
    
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('categoria_id', TRUE);
        $this->dbforge->create_table('tb_categorias_produtos', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_categorias_produtos');
    }

}