<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base_controller.php';

/**
* 
*/
class Page_controller extends Base_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function login()
	{
		$this->load->view('themes/' . MAINTHEME .  '/login');
	}

	function create()
	{
		$this->load->view('themes/' . MAINTHEME .  '/page/create');
	}
}