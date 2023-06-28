<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = array();
		$data["file"] ="index";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function about()
	{
		$data = array();
		$data["file"] ="about";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function contact()
	{
		$data = array();
		$data["file"] ="contact";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function software_development()
	{
		$data = array();
		$data["file"] ="software-development";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function website_development()
	{
		$data = array();
		$data["file"] ="website-development";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function website_designing()
	{
		$data = array();
		$data["file"] ="website-designing";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function blog()
	{
		$data = array();
		$data["file"] ="blog";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function blog_1()
	{
		$data = array();
		$data["file"] ="the-power-of-digital-creation-unleashed-web-development";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function blog_2()
	{
		$data = array();
		$data["file"] ="software-development-from-concept-to-reality";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function blog_3()
	{
		$data = array();
		$data["file"] ="unleashing-creativity-the-art-of-website-design";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function privacy_policy()
	{
		$data = array();
		$data["file"] ="privacy-policy";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function terms_conditions()
	{
		$data = array();
		$data["file"] ="terms-conditions";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
	public function cookie_policy()
	{
		$data = array();
		$data["file"] ="cookie-policy";
		$data["title"] = "Tittle";
		$this->load->view('include/template',$data);
	}
}
