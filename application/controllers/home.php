<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		//memanggil recipe model
		parent::__construct();
		$this->load->model('tips_model');
		$this->load->helper('text');
		$this->load->model('recipe_model');

	}

	public function index()
	{
		$data['title']='Dapur Yucin "Simple and Healthy Cuisine"';
		$data['tips_list']=$this->tips_model->select_lim3();
		$tmp['content']=$this->load->view('home',$data, TRUE);
		$this->load->view('layout',$tmp);

	}

	public function search($id_recipe=NULL)
	{
		
		$data['title']='Search Result';
		$search=$this->input->post('search');

		$data['random']=$this->recipe_model->get_random();
		$data['recipe_list']=$this->recipe_model->search_result($search);
		$tmp['content']=$this->load->view('search',$data, TRUE);
		$this->load->view('layout',$tmp);


	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */