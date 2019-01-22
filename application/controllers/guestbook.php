<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends CI_Controller {

	public function __construct()
	{
		//memanggil category model
		parent::__construct();
		$this->load->model('guestbook_model');

	}

	public function index()
	{
		$tmp['title']='Guestbook';
		$data['success']='';
		$status='1';
		$data['guest']=$this->guestbook_model->select_status($status);
		$tmp['content']=$this->load->view('guestbook', $data, TRUE);
		$this->load->view('layout',$tmp);

	}

	public function insert()
	{
		//insert author

		$this->form_validation->set_rules('name', 'Full Name','required');
		$this->form_validation->set_rules('email', 'E-Mail','required|valid_email');
		$this->form_validation->set_rules('comment', 'Message', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			
			$tmp['title']='Guestbook';
			$data['success']='';
			$status='1';
			$data['guest']=$this->guestbook_model->select_status($status);
			$tmp['content']=$this->load->view('guestbook', $data, TRUE);
			$this->load->view('layout',$tmp);
		}
		else
		{
			$this->guestbook_model->insert_guestbook();
			$tmp['title']='Guestbook';
			$data['success']='';
			$status='1';
			$data['guest']=$this->guestbook_model->select_status($status);
			$tmp['content']=$this->load->view('guestbook', $data, TRUE);
			$this->load->view('layout',$tmp);
		}
	}

}

/* End of file guestbook.php */
/* Location: ./application/controllers/guestbook.php */