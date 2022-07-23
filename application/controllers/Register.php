<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}

	public function proses_regist()
	{
		$data_input = $this->input->post();
		echo json_encode($data_input);
	}

	public function insert_user_to_db($data_user)
	{
		
	}

}