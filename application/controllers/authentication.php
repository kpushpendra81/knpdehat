<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

	public function index() {
		$data['title'] = 'KanpurDehat::Login';
		$data['body'] = 'authentication/login';
		$this->load->view('authentication/layout', $data);
	}

	public function forget() {
		$data['title'] = 'KanpurDehat::Reset Password';
		$data['body'] = 'authentication/forget';
		$this->load->view('authentication/layout', $data);
	}

}
