<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// $name = $_GET['name'];
		$name = $this->input->get('name');
		echo $name;
		$this->load->view('welcome_message');
	}
}
