<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index(){
		$data['person'] = 'Doug';

		// Get Quotes From Database
		$this->load->model('model_quotes');
		$data['quotes'] = $this->model_quotes->getQuotes();

		$this->load->view('site_header', $data);
		$this->load->view('home', $data);
		$this->load->view('site_footer');
	}

	public function admin(){
		$data['person'] = 'Doug';

		$this->load->view('site_header', $data);
		$this->load->view('admin');
		$this->load->view('site_footer');
	}

	public function addAdmin(){
		$data['person'] = 'Doug';

		$this->load->view('site_header', $data);
		$this->load->view('addAdmin');
		$this->load->view('site_footer');
	}
}
