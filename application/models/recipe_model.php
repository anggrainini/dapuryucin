<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Recipe_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database('db_dapuryucin');  //panggil database db_dapuryucin
	}

	public function select_recipe($num, $offset){
		$this->db->select ( '*' ); 
    	$this->db->from ( 'recipe' );
    	$this->db->join ( 'category', 'category.id_category = recipe.id_category' , 'left' );
    	$this->db->join ( 'author', 'author.id_author = recipe.id_author' , 'left' );
    	$query = $this->db->order_by('date_created', 'desc')
    					->get ('',$num, $offset);
    	return $query->result ();
	}


	public function select_full($id_recipe){
		$this->db->select ( '*' ); 
    	$this->db->from ( 'recipe' );
    	$this->db->join ( 'category', 'category.id_category = recipe.id_category' , 'left' );
    	$this->db->join ( 'author', 'author.id_author = recipe.id_author' , 'left' );
    	$query = $this->db->where('id_recipe', $id_recipe)
    					->limit(1)
    					->get();

    	return $query->result ();
    	
	}

	public function select_by_category($id_category){
		$this->db->select ( '*' ); 
    	$this->db->from ( 'recipe' );
    	$this->db->join ( 'category', 'category.id_category = recipe.id_category' , 'left' );
    	$this->db->join ( 'author', 'author.id_author = recipe.id_author' , 'left' );
    	$query = $this->db->where('recipe.id_category', $id_category)
    					->order_by('date_created', 'desc')
						->get ('');

    	return $query->result ();
    	
	}

	public function select_by_author($id_author){
		$this->db->select ( '*' ); 
    	$this->db->from ( 'recipe' );
    	$this->db->join ( 'category', 'category.id_category = recipe.id_category' , 'left' );
    	$this->db->join ( 'author', 'author.id_author = recipe.id_author' , 'left' );
    	$query = $this->db->where('recipe.id_author', $id_author)
    					->order_by('date_created', 'desc')
    					->get();

    	return $query->result ();
    	
	}

	public function search_result($search){

		$this->db->select ( '*' ); 
    	$this->db->from ( 'recipe' );
    	$this->db->join ( 'category', 'category.id_category = recipe.id_category' , 'left' );
    	$this->db->join ( 'author', 'author.id_author = recipe.id_author' , 'left' );
    	$array = array('name' => $search,'ingredients' => $search);
    	$query = $this->db->or_like($array)
    					  ->get ('');

    	return $query->result();
	}

	public function get_random(){

		$this->db->select ( '*' ); 
    	$this->db->from ( 'recipe' );
    	$this->db->join ( 'category', 'category.id_category = recipe.id_category' , 'left' );
    	$this->db->join ( 'author', 'author.id_author = recipe.id_author' , 'left' );
    	$query = $this->db->order_by("title", "random")
    					  ->limit(10)
    					  ->get ('');

    	return $query->result();
	}


	public function select_author(){
		$query = $this->db->get('author'); 
		return $query->result(); 
	}

	public function select_category(){
		$query = $this->db->get('category'); 
		return $query->result(); 
	}

	public function insert_recipe($data){

		return $this->db->insert('recipe', $data);
	}

	public function get_id($id_recipe){
		$query =$this->db->where('id_recipe', $id_recipe)
						->limit(1)
						->get('recipe');
      	
		if ($query->num_rows() > 0){
			return $query->row();
		} else {
			return array();
		}
	}
	
	public function update_recipe($data, $id_recipe){
		$this->db->where('id_recipe',$id_recipe);
      	return $this->db->update('recipe', $data);
	}

	
	public function delete_recipe($id_recipe){
	$this->db->where('id_recipe',$id_recipe);
     $query = $this->db->get('recipe');
     $row = $query->row();

     unlink("./uploads/$row->image");

    
		$this->db->where('recipe.id_recipe', $id_recipe);
		return $this->db->delete('recipe');


	}
}


/* End of file recipe.php */
/* Location: ./application/models/recipe_model.php */