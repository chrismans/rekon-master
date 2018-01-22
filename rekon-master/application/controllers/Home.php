<?php

/**
* 
*/
class Home extends CI_Controller
{
	
	function index() {
		$this->load->view('home/homeview');
	}
	function about(){
		$this->load->view('home/about');
	}
	function galery(){
		$this->load->view('home/galery');
	}
	function contact(){
		$this->load->view('home/contact');
	}
	function administrator() {
		redirect ('adminisrator');
	}
}