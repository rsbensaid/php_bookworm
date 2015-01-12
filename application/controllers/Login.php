<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Logindb');
	} 

	public function index()
	{
		$this->load->view('login');
	}	

	 public function registerfunc()
	{
		// var_dump('here', $this->input->post());
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');

		if($this->form_validation->run())
		{
			// var_dump('and here', $this->input->post());
			$user['first_name'] = $this->input->post('first_name');
			$user['last_name'] = $this->input->post('last_name');
			$user['username'] = $this->input->post('username');
			$user['password'] = $this->input->post('password');
			// var_dump('user', $user);	
			if($this->Logindb->register($user))
			{
				// var_dump('user', $user);
				$view['user'] = $this->input->post();
				$this->session->set_userdata('username', $user['username']);
				// redirect('/Profile/index');
				$this->load->view('starter');
			}
			else
			{
				$this->session->set_flashdata('errors', 'Could not add user');
				redirect('/Login');
			}
		}
		else
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/Login');
		}
	}

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/Login');
	}

	public function loginfunc()
	{
//gotten here
		$loginemail = $this->input->post('username');
		$loginpassword  = $this->input->post('password');
		$value['user'] = $this->Logindb->login($loginemail, $loginpassword);
		if($value['user'])
		{
			$this->session->set_userdata('username', $value['user']['username']);
			// var_dump($this->session->userdata);
			$this->load->view('starter');
		}
		else
		{
			$this->session->set_flashdata('errors', 'Please enter a valid email and password combination');
			redirect('/Login');
		}
	}

	public function gotoprof ()
	{
		redirect('/Profile/index');
	}

	public function addbook ()
	{
		// var_dump($this->session->userdata);
		$this->load->view('add_book');
		// var_dump('new', $this->session->userdata);
	}
}

//end of course controller