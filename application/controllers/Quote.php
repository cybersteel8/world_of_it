<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends CI_Controller {

	public function quote_page($refferal = 'direct')
	{
		//Add in code to save refferal to database
		$data['refferal'] = $refferal;
		$data['quoteHeader'] = '';

		if($refferal == 'start-now-header' || $refferal == 'start-now-cta')
		{
			$data['quoteHeader'] = 'Hello! Please fill out this quote form as best as you can and we will endevour to get back to you as soon as possible!';
		}
		elseif($refferal == 'package-small')
		{
			$data['quoteHeader'] = 'Hello! We have filled in some information based on the package you\'ve chosen, you can now fill in the rest of the information and we will get back to you quickly!';
		}
		elseif($refferal == 'package-medium')
		{
			$data['quoteHeader'] = 'Hello! We have filled in some information based on the package you\'ve chosen, you can now fill in the rest of the information and we will get back to you quickly!';
		}
		elseif($refferal == 'package-large')
		{
			$data['quoteHeader'] = 'Hello! We have filled in some information based on the package you\'ve chosen, you can now fill in the rest of the information and we will get back to you quickly!';
		}

        $this->load->view('header');
        $this->load->view('quote', $data);
        $this->load->view('footer');
	}

	public function quoteSubmit()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('account', 'Default Account', 'trim|required');
		$this->form_validation->set_rules('address', 'Default Address', 'trim|required');
		$this->form_validation->set_rules('userEmail', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('userFirstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('userLastname', 'Last Name', 'trim|required');

		$data['account'] = $this->input->post('account');
		$data['address'] = $this->input->post('address');
		$data['userEmail'] = $this->input->post('userEmail');
		$data['userFirstname'] = $this->input->post('userFirstname');
		$data['userLastname'] = $this->input->post('userLastname');

		if ($this->form_validation->run() == FALSE)
		{

		}
	}
}
