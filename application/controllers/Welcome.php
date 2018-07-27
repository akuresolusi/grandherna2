<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('page-login');
	}

	public function login(){
		$this->load->view('page-login');
	}

	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password'); 
		
		if($username == "admin" && $password == "admin"){
			$data_session = array("level" => "admin" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');

		}elseif ($username == "pendaftaran" && $password == "pendaftaran"){
			$data_session = array("level" => "pendaftaran" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');

		}elseif ($username == "poli" && $password == "poli"){
			$data_session = array("level" => "poli" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');

		}elseif ($username == "ranap" && $password == "ranap"){	
			$data_session = array("level" => "ranap" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');

		}elseif ($username == "lab" && $password == "lab"){
			$data_session = array("level" => "lab" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');

		}elseif ($username == "radiologi" && $password == "radiologi"){
			$data_session = array("level" => "radiologi" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');

		}elseif ($username == "pembayaran" && $password == "pembayaran"){
			$data_session = array("level" => "pembayaran" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');

		}elseif ($username == "apotek" && $password == "apotek"){
			$data_session = array("level" => "apotek" );
			$this->session->set_userdata($data_session);
			redirect('dashboard');
		}else{
			redirect('login');
		}
	}
}
