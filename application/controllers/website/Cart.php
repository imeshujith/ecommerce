<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$this->load->view('website/header');
		$this->load->view('website/cart');
		$this->load->view('website/footer');
	}
}
