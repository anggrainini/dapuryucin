<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$tmp['title']='About';
		$tmp['content']=$this->load->view('about', '', TRUE);
		$this->load->view('layout',$tmp);

	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */