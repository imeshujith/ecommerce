<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$this->load->view('website/header');
		$this->load->view('website/shop');
		$this->load->view('website/footer');
	}
}
