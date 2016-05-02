<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');


	}

	public function index()
	{
		$array_items = array('phonenumber', 'email' ,'logged_in' , 'classnumber' , 'realname');

		$this->session->unset_userdata($array_items);
	}
}