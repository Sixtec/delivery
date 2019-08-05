<?php

class Migration_Update_Produtos extends CI_Migration {

    public function up() {
        $fields = array(
            'empresa_id' => array(
                'type' => 'INT',
            ),
        );
    
        $this->dbforge->add_column('tb_produtos', $fields);
    }

}
