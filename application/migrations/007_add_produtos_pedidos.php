<?php

class Migration_Add_Produtos_Pedidos extends CI_Migration {

    public function up() {
        $fields = array(
            'produto_pedido_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'produto_id' => array(
                'type' => 'INT',
                'constraint' => 100
            ),
            'pedido_id' => array(
                'type' => 'INT',
                'constraint' => 100,
            ),
        );
    
        $this->dbforge->add_field($fields);
        $this->dbforge->add_field("data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_key('produto_pedido_id', TRUE);
        $this->dbforge->create_table('tb_produtos_pedidos', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_produtos_pedidos');
    }

}