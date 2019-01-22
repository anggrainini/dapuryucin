<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function index()
	{	
		$data['title']='Welcome Admin';
		$data['title_box']='Welcome to dapur_yucin Admin';
		$tmp['content']=$this->load->view('admin/welcome_admin',$data,TRUE);
		$this->load->view('admin/admin', $tmp);

	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */