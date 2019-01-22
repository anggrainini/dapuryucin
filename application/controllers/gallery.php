<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		//memanggil recipe model
		parent::__construct();
		$this->load->model('recipe_model');

	}

	public function index()
	{

		//select recipe
		$jml = $this->db->get('recipe');

		//pengaturan pagination
		 $config['base_url'] = base_url().'gallery/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '6';
		 $config['uri_segment']='3';

		//inisialisasi config
		 $this->pagination->initialize($config);
		
		//buat pagination
		 $data['halaman']= $this->pagination->create_links();
		//tamplikan data
		$tmp['title']='Gallery';
		$data['gallery_list']=$this->recipe_model->select_recipe($config['per_page'], $this->uri->segment(3));
		$tmp['content']=$this->load->view('gallery', $data, TRUE);
		$this->load->view('layout',$tmp);

	
	}
}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */