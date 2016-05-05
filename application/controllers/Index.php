<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

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

	private $_data = array();

	public function __construct()
	{
		parent::__construct();
		$this->template->set_partial('header','/partials/heaer_sample');
		//$this->template->set_partial();
		$this->template->set_partial('footer','/partials/footer_sample');
	}	

	public function index()
	{
		$this->template->set_layout("door_template")->build("pages/door_page",$this->_data);
		$this->load->view('index');
	}
}
