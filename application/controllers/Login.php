<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('session');

	}
	public function index()
	{
		$this->load->view('index/index');
	}
	public function checkuser()
	{
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$where = array('phonenumber' => $username);
		$user = $this->user_model->get_user($where);
		//print_r($user);
		if($user['password'] == $password && ($password != NULL))
		{
			$newdata = array(
			    'realname'  => $user['realname'],
			    'email'     => $user['email'],
			    'logged_in' => TRUE,
			    'classnumber' => $user['classnumber']
			);

			$this->session->set_userdata($newdata);	

		}
		if($_SESSION['logged_in'] == TRUE)
		{
			$this->load->view('index/index');
		}
		print_r($_SESSION);
	}

}