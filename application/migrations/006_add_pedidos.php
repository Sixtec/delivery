<?php

class Migration_Add_Pedidos extends CI_Migration {

    public function up() {
        $fields = array(
            'pedido_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'empresa_id' => array(
                'type' => 'INT',
                'constraint' => 100
            ),
            'usuario_id' => array(
                'type' => 'INT',
                'constraint' => 100,
            ),
            'usuario_nome' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
            ),
            'valor' => array(
                'type' => 'INTEGER'
            ),
            'observacao_pedido' => array(
                'type' => 'TEXT',
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
        );
    
        $this->dbforge->add_field($fields);
        $this->dbforge->add_field("data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_key('pedido_id', TRUE);
        $this->dbforge->create_table('tb_pedidos', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_pedidos');
    }

}