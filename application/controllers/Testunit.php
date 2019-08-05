<?php 

class Testunit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }

    private function division($a, $b)
    {
        return $a/$b; 
    }
    
    private function sum($a, $b)
    {
        return $a+$b; 
    }

    public function index()
    {
        $teste = $this->division(6, 3);
        $expect = 3;
        $test_name = 'Division';
        echo $this->unit->run($teste, $expect, $test_name);
        
        $teste = $this->sum(6, 3);
        $expect = 9;
        $test_name = 'Sum';
        echo $this->unit->run($teste, $expect, $test_name);
    }
}