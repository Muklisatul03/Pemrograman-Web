<?php
class Product extends CI_Controller{
	public function index()
	{
		$this->load->view("product_page");
		$this->load->view("catalog");
	}
	
	public function catalog()
	{
		$this->load->view("catalog");
	}

}