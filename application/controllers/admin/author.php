<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Author extends MY_Controller {

	public function __construct()
	{
		//memanggil author model
		parent::__construct();
		$this->load->model('author_model');

	}

	public function index($id_author=NULL)
	{
		$jml = $this->db->get('author');

		//pengaturan pagination
		 $config['base_url'] = base_url().'admin/author/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '5';
		 $config['uri_segment']='4';

		//inisialisasi config
		 $this->pagination->initialize($config);
		
		//buat pagination
		 $data['halaman']= $this->pagination->create_links();
		//tamplikan data

		$data['title']='Author';
		$data['title_box']='Author';
		$data['author_list']=$this->author_model->select_author($config['per_page'], $this->uri->segment(4));
		$tmp['content']=$this->load->view('admin/author/author_view',$data,TRUE);
		$this->load->view('admin/admin', $tmp);
	}

	public function insert()
	{
		//insert author

		$data['title']='Insert New Author';
		$this->form_validation->set_rules('name_author', 'name_author', 'required|is_unique[author.name_author]');

		if ($this->form_validation->run() === FALSE)
		{
			$data['title_box']='Insert New Author';
			$tmp['content']=$this->load->view('admin/author/author_insert',$data,TRUE);
			$this->load->view('admin/admin',$tmp);	
		}
		else
		{
			$this->author_model->insert_author();
			redirect ('admin/author');
		}
	}

	public function edit($id_author){
		$this->form_validation->set_rules('name_author', 'name_author', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['title']='Edit Author';
			$data['title_box']='Edit Author';
			$data['name_author'] = $this->author_model->get_id($id_author);
			$tmp['content']=$this->load->view('admin/author/author_edit',$data,TRUE);
			$this->load->view('admin/admin',$tmp);	
		}
		else
		{
		$data= array (
					'name_author'			=> set_value('name_author'));
		$this->author_model->update_author($data, $id_author);
				redirect('admin/author');

		}
	}

	public function delete($id_author)
	{
		$this->author_model->delete_author($id_author);
			redirect('admin/author');

	}
}

/* End of file author.php */
/* Location: ./application/controllers/admin/author.php */