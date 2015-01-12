<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profiledb');
		$this->load->model('Logindb');
	} 

	public function index()
	{
		$values['user'] = $this->Logindb->getUser($this->session->userdata);
		// var_dump('vals', $values);
		$this->session->set_userdata('id', $values['user']);
		// var_dump($this->session->userdata);
		$values['books'] = $this->profiledb->getBooks($this->session->userdata);
		// var_dump('look here', $values['books']);
		$this->load->view('profile', $values);
	}	

	public function addbookfunc()
	{
		// var_dump($this->session->userdata);
		$book['title'] = $this->input->post('book_title');	
		$book['author'] = $this->input->post('book_author');	
		$book['subject'] = $this->input->post('book_subject');	
		$book['book_group'] = $this->input->post('book_group');	
		$book['library'] = $this->input->post('book_library');	
		$book['audio'] = $this->input->post('book_audio');
		$book['date_started'] = $this->input->post('date_started');
		$book['date_finished'] = $this->input->post('date_finished');
		$book['assessment'] = $this->input->post('assessment');
		if($this->profiledb->addbook($book))
		{
			redirect('/Profile/index');
		}	
	}

	public function search_title ()
	{
		$values['books'] = $this->profiledb->getTitle($this->input->post('title_s'));
		if($values['books'])
		{
			$this->load->view('search_results', $values);
		}
		else
		{
			redirect('/Profile/index');
		}
	}

	public function search_author ()
	{
		$values['books'] = $this->profiledb->getAuthor($this->input->post('author_s'));
		if($values['books'])
		{
			$this->load->view('search_results', $values);
		}
		else
		{
			redirect('/Profile/index');
		}
	}

	public function search_subject ()
	{
		$values['books'] = $this->profiledb->getSubject($this->input->post('subject_s'));
		if($values['books'])
		{
			$this->load->view('search_results', $values);
		}
		else
		{
			redirect('/Profile/index');
		}
	}

	public function search_group ()
	{
		$values['books'] = $this->profiledb->getGroup($this->input->post('group_s'));
		if($values['books'])
		{
			$this->load->view('search_results', $values);
		}
		else
		{
			redirect('/Profile/index');
		}
	}
}

//end of course controller