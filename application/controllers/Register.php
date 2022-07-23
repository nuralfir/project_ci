<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->load->model('crud_model');
	}

	public function proses_regist()
	{
		$data_input = $this->input->post();
		echo json_encode($data_input);
	}

	public function save()
	{
			$where = [
				'username'=>$this->input->post('username')
			];

			$jumlah_data_duplikat = $this->crud_model->get_where('user', '*', $where)->num_rows();
			if($jumlah_data_duplikat == 0)
			{
				$name = $this->input->post('name');
				$username = $this->input->post('username');
				$password = $this->input->post('password');			
				$this->auth->register($name,$username,$password);
				$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
				redirect('login');
			}
			else
			{
				$this->session->set_flashdata('error', 'Data sudah ada');
				redirect('register');
			}
			
		
	
	}

}