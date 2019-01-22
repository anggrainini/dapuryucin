<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct()
	{
		//memanggil category model
		parent::__construct();
		$this->load->model('category_model');

	}

	public function index($id_category=NULL)
		{
		 $jml = $this->db->get('category');

		//pengaturan pagination
		 $config['base_url'] = base_url().'admin/category/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '5';
		 $config['uri_segment']='4';

		//inisialisasi config
		 $this->pagination->initialize($config);
		
		//buat pagination
		 $data['halaman']= $this->pagination->create_links();
		//tamplikan data
		
		 $data['title']='Category';
		 $data['title_box']='Category'; 
		 $data['category_list'] = $this->category_model->select_category($config['per_page'], $this->uri->segment(4));
		 $tmp['content']=$this->load->view('admin/category/category_view',$data,TRUE);
		 $this->load->view('admin/admin', $tmp);
		
		 }

	public function insert()
	{
		//insert category

		$data['title']='Insert New Category';
		$this->form_validation->set_rules('category', 'category', 'required|is_unique[category.category]');

		if ($this->form_validation->run() === FALSE)
		{
			$data['title_box']='Insert New Category';
			$tmp['content']=$this->load->view('admin/category/category_insert',$data,TRUE);
			$this->load->view('admin/admin',$tmp);	
		}
		else
		{
			$this->category_model->insert_category();
			redirect ('admin/category');
		}
	}

	public function edit($id_category){
		$this->form_validation->set_rules('category', 'category', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['title']='Edit Category';
			$data['title_box']='Edit Category';
			$data['category'] = $this->category_model->get_id($id_category);
			$tmp['content']=$this->load->view('admin/category/category_edit',$data,TRUE);
			$this->load->view('admin/admin',$tmp);	
		}
		else
		{
		$data= array (
					'category'			=> set_value('category'));
		$this->category_model->update_category($data, $id_category);
				redirect('admin/category');

		}
	}

	public function delete($id_category)
	{
		$this->category_model->delete_category($id_category);
			redirect('admin/category');

	}
}

/* End of file category.php */
/* Location: ./application/controllers/admin/category.php */