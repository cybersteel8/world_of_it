<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function projects()
	{
		$this->load->view('header');
		$this->load->view('projects');
		$this->load->view('footer');
	}

	public function services()
	{
		$this->load->view('header');
		$this->load->view('services');
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function privacy()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function sitemap()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
}
