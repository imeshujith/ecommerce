<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		$this->load->view('website/header');
		$this->load->view('website/checkout');
		$this->load->view('website/footer');
	}
}
