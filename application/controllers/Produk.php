<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");
        $this->load->library('form_validation');
    }
 
	public function index()
	{
		$data['produk'] = $this->produk_model->getAll();
		$this->load->view('template/header');
		$this->load->view('siswa/index',$data);
		$this->load->view('template/footer');
	}
}
