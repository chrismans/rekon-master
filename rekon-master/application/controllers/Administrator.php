<?php

/**
* 
*/
class Administrator extends CI_Controller
{
	
	function index() {
		$this->load->view('index');
	}

	function main() {
		$this->load->view('index');
	}

	function tes() {
		$this->load->view('tes');
	}
}