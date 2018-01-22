<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

    // public function _construct()
    // {
    //     parent::_construct();
    // }
	public function index()
	{
        $this->load->view('welcome_message');
		// echo "User2018";
	}
}
