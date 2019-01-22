<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends MY_Controller {

	public function __construct()
	{
		//memanggil category model
		parent::__construct();
		$this->load->model('guestbook_model');

	}

	public function index($id_guest=NULL)
	{
		$jml = $this->db->get('guestbook');
		// Pengaturan pagination

		$config['base_url'] = base_url().'admin/guestbook/index';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = '5';
		$config['uri_segment']='4';

		//inisialisasi config
		 $this->pagination->initialize($config);

		 //buat pagination
		 $data['halaman']= $this->pagination->create_links();

		$data['title']='Guestbook';
		$data['title_box']='Guestbook';
		$data['gbook_list']=$this->guestbook_model->select_guestbook($config['per_page'], $this->uri->segment(4));
		$tmp['content']=$this->load->view('admin/guestbook/guestbook_view', $data, TRUE);
		$this->load->view('admin/admin',$tmp);

	}

	public function show($id_guest)
	{
		$data='1';
		$status = array(
               'status' => $data);

		$this->guestbook_model->change_status($id_guest, $status);
				redirect('admin/guestbook');

	}

	public function hide($id_guest)
	{
		$data='0';
		$status = array(
               'status' => $data);
		

		$this->guestbook_model->change_status($id_guest, $status);
				redirect('admin/guestbook');
	}

	public function delete($id_guest)
	{
		$this->guestbook_model->delete_guestbook($id_guest);
		redirect('admin/guestbook');

	}

}

/* End of file guestbook.php */
/* Location: ./application/controllers/admin/guestbook.php */

