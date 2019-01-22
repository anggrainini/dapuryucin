<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Recipe extends MY_Controller {

	public function __construct()
	{
		//memanggil recipe model
		parent::__construct();
		$this->load->model('recipe_model');

	}

	public function index($id_recipe=NULL)
	{
		//select recipe
		$jml = $this->db->get('recipe');

		//pengaturan pagination
		 $config['base_url'] = base_url().'admin/recipe/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '5';
		 $config['uri_segment']='4';

		//inisialisasi config
		 $this->pagination->initialize($config);
		
		//buat pagination
		 $data['halaman']= $this->pagination->create_links();
		//tamplikan data
		
		$data['title']='Recipe';
		$data['title_box']='Recipe';
		$data['recipe_list']=$this->recipe_model->select_recipe($config['per_page'], $this->uri->segment(4));
		$tmp['content']=$this->load->view('admin/recipe/recipe_view',$data,TRUE);
		$this->load->view('admin/admin', $tmp);
	}

	public function view($id_recipe)
	{
		//select recipe
		$data['title']='View Recipe';
		$data['title_box']='Full Recipe';
		$data['recipe_list'] = $this->recipe_model->select_full($id_recipe);
		$tmp['content']=$this->load->view('admin/recipe/full_recipe',$data,TRUE);
		$this->load->view('admin/admin', $tmp);
	}

	public function insert()
	{
		//insert recipe
		$data['author'] = $this->recipe_model->select_author();
		$data['category'] = $this->recipe_model->select_category();
		$data['title']='Insert New Recipe';
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('id_category', 'id_category', 'required');	
		$this->form_validation->set_rules('id_author', 'id_author', 'required');			

		if ($this->form_validation->run() === FALSE)
		{

			$data['title_box']='Insert New Recipe';
			$data['error']='';
			$tmp['content']=$this->load->view('admin/recipe/recipe_insert',$data,TRUE);
			$this->load->view('admin/admin',$tmp);	
		}
		else
		{
			// load uploading file library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '1000'; //MB
			$config['max_width']  = '3000';//pixels
			$config['max_height']  = '3000';//pixels

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{	
				$data['title_box']='Insert New Recipe';
				$data['error']=$this->upload->display_errors();
				$tmp['content']=$this->load->view('admin/recipe/recipe_insert',$data,TRUE);
				$this->load->view('admin/admin',$tmp);	
			} 
			else 
			{
				//file berhasil diupload lalu lanjut ke query insert
				// eksekusi query Insert
				$gambar = $this->upload->data();
				$data= array (
					'name'			=> $this->input->post('name'),
					'id_category'	=> $this->input->post('id_category'),
					'cook_time'		=> $this->input->post('cook_time'),
					'image'			=> $gambar['file_name'],
					'summary'		=> $this->input->post('summary'),
					'ingredients'	=> $this->input->post('ingredients'),
					'instruction'	=> $this->input->post('instruction'),
					'id_author'		=> $this->input->post('id_author'),
				);
			
				$this->recipe_model->insert_recipe($data);
				redirect ('admin/recipe');
			}
		}
	}

	public function edit($id_recipe){
		
		$data['author'] = $this->recipe_model->select_author();
		$data['category'] = $this->recipe_model->select_category();

		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('id_category', 'id_category', 'required');	
		$this->form_validation->set_rules('id_author', 'id_author', 'required');		
		

		if ($this->form_validation->run() == FALSE)
			{
					$data['title']='Edit Recipe';
					$data['title_box']='Edit Recipe';
					$data['name_recipe'] = $this->recipe_model->get_id($id_recipe);
					$data['error']='';
					$tmp['content']=$this->load->view('admin/recipe/recipe_edit',$data,TRUE);
					$this->load->view('admin/admin',$tmp);	
			}
		else
			{
					if ( $_FILES['userfile']['name'] != ''){
						// form submit dengan gambar diisi
						// load uploading file library
						
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'jpg|png';
						$config['max_size']	= '1000'; //MB
						$config['max_width']  = '3000';//pixels
						$config['max_height']  = '3000';//pixels


						$this->load->library('upload', $config);

								if ( ! $this->upload->do_upload())
								{
									$data['title']='Edit Recipe';
									$data['title_box']='Edit Recipe';
									$data['error']=$this->upload->display_errors();
									$data['name_recipe'] = $this->recipe_model->get_id($id_recipe);
									$tmp['content']=$this->load->view('admin/recipe/recipe_edit',$data,TRUE);
									$this->load->view('admin/admin',$tmp);	
								} 
								else 
								{
									$gambar = $this->upload->data();
									$data= array (
									'name'			=> $this->input->post('name'),
									'id_category'	=> $this->input->post('id_category'),
									'cook_time'		=> $this->input->post('cook_time'),
									'image'			=> $gambar['file_name'],
									'summary'		=> $this->input->post('summary'),
									'ingredients'	=> $this->input->post('ingredients'),
									'instruction'	=> $this->input->post('instruction'),
									'id_author'		=> $this->input->post('id_author'),
								);
									$this->db->where('id_recipe',$id_recipe);
     								$query = $this->db->get('recipe');
     								$row = $query->row();

     								unlink("./uploads/$row->image");
     								
									$this->recipe_model->update_recipe($data, $id_recipe);
									redirect('admin/recipe');
								} 
					}	
					else 
					{
						//form submit dengan gambar dikosongkan
						$data= array (
							'name'			=> $this->input->post('name'),
							'id_category'	=> $this->input->post('id_category'),
							'cook_time'		=> $this->input->post('cook_time'),
							'summary'		=> $this->input->post('summary'),
							'ingredients'	=> $this->input->post('ingredients'),
							'instruction'	=> $this->input->post('instruction'),
							'id_author'		=> $this->input->post('id_author'),
						);
						$this->recipe_model->update_recipe($data, $id_recipe);
						redirect('admin/recipe');
					}

			}
		}

	public function delete($id_recipe)
	{
		$this->recipe_model->delete_recipe($id_recipe);
		redirect('admin/recipe');

	}
}

/* End of file recipe.php */
/* Location: ./application/controllers/admin/recipe.php */