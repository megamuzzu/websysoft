<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = array();
		$data["file"] ="index";
		$data["title"] = "Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
	public function about()
	{
		$data = array();
		$data["file"] ="about";
		$data["title"] = "About Us: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}

	public function notfound()
	{
		$data = array();
		$data["file"] ="404";
		$data["title"] = "404: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}

		public function thankyou()
	{
		$data = array();
		$data["file"] ="thank-you";
		$data["title"] = "Thank You: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}

	public function contact()
	{
		$data = array();
		$data["file"] ="contact";
		$data["title"] = "Contact Us: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
	public function software_development()
	{
		$data = array();
		$data["file"] ="software-development";
		$data["title"] = "Software Development: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
	public function website_development()
	{
		$data = array();
		$data["file"] ="website-development";
		$data["title"] = "Website Development: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
	public function website_designing()
	{
		$data = array();
		$data["file"] ="website-designing";
		$data["title"] = "Website Designing: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
	public function blog()
	{
		$data = array();
		$data["file"] ="blog";
		$data["title"] = "Our Blogs: Websysoft Solutions";
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
		$data["title"] = "Privacy Policy: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
	public function terms_conditions()
	{
		$data = array();
		$data["file"] ="terms-conditions";
		$data["title"] = "Terms and Conditions: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
	public function cookie_policy()
	{
		$data = array();
		$data["file"] ="cookie-policy";
		$data["title"] = "Cookie Policy: Websysoft Solutions";
		$this->load->view('include/template',$data);
	}
}
