<?php 

class Migrate extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library('migration');

        if ($this->migration->current()) {
            echo 'Migrate funciou!';
        }
        else {
            echo $this->migration->error_string();
        }
    }
}