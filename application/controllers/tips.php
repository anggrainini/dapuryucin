<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tips extends CI_Controller {

	public function __construct()
	{
		//memanggil recipe model
		parent::__construct();
		$this->load->model('tips_model');

	}

	public function index()
	{
		$jml = $this->db->get('tips');

		//pengaturan pagination
		 $config['base_url'] = base_url().'index.php/admin/tips/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '5';
		 $config['uri_segment']='4';

		//inisialisasi config
		 $this->pagination->initialize($config);
		
		//buat pagination
		 $data['halaman']= $this->pagination->create_links();
		//tamplikan data
		$data['title']='Tips';
		$data['tips_list']=$this->tips_model->select_tips($config['per_page'], $this->uri->segment(4));
		$tmp['content']=$this->load->view('tips/tips', $data, TRUE);
		$this->load->view('layout',$tmp);

	}

	public function view($id_tips, $title='')
	{
		$row = $this->db->get_where('tips', array('id_tips' => $id_tips))->row();
		//select recipe
		$data['title']='View Tips';
		$data['tips_list'] = $this->tips_model->select_full($id_tips);
		$tmp['content']=$this->load->view('tips/full_tips',$data,TRUE);
		$this->load->view('layout', $tmp);

		if ($row and ! $title) {

            $this->load->helper('url');

            $title = url_title($row->title, 'dash', TRUE);
            redirect("tips/view/{$id_tips}/{$title}");
		}
	}
}

/* End of file tips.php */
/* Location: ./application/controllers/tips.php */