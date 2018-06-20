<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GoView extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function show($FlieName, $ViewName)
	{
		$this->load->view("/files/$FlieName/$ViewName");
	}
}
