<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}
	public function dashboard2(){
		echo "Dashboard 2";
	}
}
