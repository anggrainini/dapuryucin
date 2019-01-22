<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Tips extends MY_Controller {

	public function __construct()
	{
		//memanggil tips model
		parent::__construct();
		$this->load->model('tips_model');

	}

	public function index($id_tips=NULL)
	{

		$jml = $this->db->get('tips');

		//pengaturan pagination
		 $config['base_url'] = base_url().'admin/tips/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '5';
		 $config['uri_segment']='4';

		//inisialisasi config
		 $this->pagination->initialize($config);
		
		//buat pagination
		 $data['halaman']= $this->pagination->create_links();
		//tamplikan data

		//select tips
		$data['title']='Tips';
		$data['title_box']='Tips';
		$data['tips_list']=$this->tips_model->select_tips($config['per_page'], $this->uri->segment(4));
		$tmp['content']=$this->load->view('admin/tips/tips_view',$data,TRUE);
		$this->load->view('admin/admin', $tmp);
	}

	public function view($id_recipe)
	{
		//select recipe
		$data['title']='View Tips';
		$data['title_box']='View Tips';
		$data['tips_list'] = $this->tips_model->select_full($id_recipe);
		$tmp['content']=$this->load->view('admin/tips/full_tips',$data,TRUE);
		$this->load->view('admin/admin', $tmp);
	}

	public function insert()
	{
		//insert tips
		$data['author'] = $this->tips_model->select_author();
		$data['title']='Insert New Tips';
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('summary', 'summary', 'required');	
		$this->form_validation->set_rules('id_author', 'id_author', 'required');			

		if ($this->form_validation->run() === FALSE)
		{
			$data['title_box']='Insert New Tips';
			$tmp['content']=$this->load->view('admin/tips/tips_insert',$data,TRUE);
			$this->load->view('admin/admin',$tmp);	
		}
		else
		{
			$this->tips_model->insert_tips();
			redirect ('admin/tips');
		}
	}

	public function edit($id_tips){
		
		$data['author'] = $this->tips_model->select_author();
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('summary', 'summary', 'required');	
		$this->form_validation->set_rules('id_author', 'id_author', 'required');	

		if ($this->form_validation->run() == FALSE)
		{
			$data['title']='Edit Tips';
			$data['title_box']='Edit Tips';
			$data['name_tips'] = $this->tips_model->get_id($id_tips);
			$tmp['content']=$this->load->view('admin/tips/tips_edit',$data,TRUE);
			$this->load->view('admin/admin',$tmp);	
		}
		else
		{
		$data= array (
					'title'			=> $this->input->post('title'),
					'summary'			=> $this->input->post('summary'),
					'tips_desc'		=> $this->input->post('tips_desc'),
					'id_author'		=> $this->input->post('id_author')
					);



		$this->tips_model->update_tips($data, $id_tips);
				redirect('admin/tips');

		}
	}

	public function delete($id_tips)
	{
		$this->tips_model->delete_tips($id_tips);
		redirect('admin/tips');

	}
}

/* End of file tips.php */
/* Location: ./application/controllers/admin/tips.php */