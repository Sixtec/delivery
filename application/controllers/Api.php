<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->validateKey($this->input->get('key'))):
			$this->formatApi($response = [], 200, 'API up');
		else:
			$this->formatApi($response = [], 403, 'Operação não permitida');
		endif;
		
	}
	
	public function Empresas()
	{
		$this->formatApi([], 200, 'Empresas');
	}
	

	public function validateKey($key)
	{

	}

	public function formatApi($data, $status, $message)
	{
		header('Content-Type: application/json');
		$d['status'] = (int) $status;
		$d['title']    = (string) $message;
		$d['data']   = (array) $data;
		echo json_encode($d, true);
	}
}
