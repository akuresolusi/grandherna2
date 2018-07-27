<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['isi'] =  "profile/form-profile";
		$data['title'] = 'Profile Rumah Sakit';
		$this->load->view('layout',$data);
	}
}
