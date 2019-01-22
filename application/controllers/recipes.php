<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends CI_Controller {

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
		 $config['base_url'] = base_url().'recipes/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '4';
		 $config['uri_segment']='3';

		//inisialisasi config
		$this->pagination->initialize($config);
		//buat pagination
		$data['pagination']='1'; 
		//tamplikan data
		$data['title']='Recipes';
		$data['title_box']='All Recipe';
		$data['recipe_list']=$this->recipe_model->select_recipe($config['per_page'], $this->uri->segment(3));
		$data['random']=$this->recipe_model->get_random();
		$data['category']=$this->recipe_model->select_category();
		$data['author']=$this->recipe_model->select_author();
		$tmp['content']=$this->load->view('recipe/recipes', $data, TRUE);
		$this->load->view('layout',$tmp);


	}

	public function category($id_category, $name='')
	{

		$row = $this->db->get_where('category', array('id_category' => $id_category))->row();
		//tamplikan data
		$data['pagination']='0';
		$data['title']='Recipes';
		$data['title_box']=$row->category;
		$data['recipe_list']=$this->recipe_model->select_by_category($id_category);
		$data['random']=$this->recipe_model->get_random();
		$data['category']=$this->recipe_model->select_category();
		$data['author']=$this->recipe_model->select_author();
		$tmp['content']=$this->load->view('recipe/recipes', $data, TRUE);
		$this->load->view('layout',$tmp);

		if ($row and ! $name) {

            $this->load->helper('url');

            $name = url_title($row->category, 'dash', TRUE);
            redirect("recipes/category/{$id_category}/{$name}");
		}


	}


	public function author($id_author, $name='')
	{

		$row = $this->db->get_where('author', array('id_author' => $id_author))->row();
		//tamplikan data
		$data['pagination']='0';
		$data['title']='Recipes';
		$data['title_box']=$row->name_author;
		$data['recipe_list']=$this->recipe_model->select_by_author($id_author);
		$data['random']=$this->recipe_model->get_random();
		$data['category']=$this->recipe_model->select_category();
		$data['author']=$this->recipe_model->select_author();
		$tmp['content']=$this->load->view('recipe/recipes', $data, TRUE);
		$this->load->view('layout',$tmp);

		if ($row and ! $name) {

            $this->load->helper('url');

            $name = url_title($row->name_author, 'dash', TRUE);
            redirect("recipes/author/{$id_author}/{$name}");
		}


	}

	public function view($id_recipe, $name='')
	{
		//select recipe

		$row = $this->db->get_where('recipe', array('id_recipe' => $id_recipe))->row();
		$data['title']='View Recipe';
		$data['recipe_list'] = $this->recipe_model->select_full($id_recipe);
		$data['random']=$this->recipe_model->get_random();
		$data['category']=$this->recipe_model->select_category();
		$data['author']=$this->recipe_model->select_author();
		$tmp['content']=$this->load->view('recipe/full_recipe',$data,TRUE);
		$this->load->view('layout', $tmp);

        if ($row and ! $name) {

            $this->load->helper('url');

            $name = url_title($row->name, 'dash', TRUE);
            redirect("recipes/view/{$id_recipe}/{$name}");
		}
	}


}

/* End of file recipes.php */
/* Location: ./application/controllers/recipes.php */