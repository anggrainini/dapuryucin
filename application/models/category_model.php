<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Category_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database('db_dapuryucin');  //panggil database db_dapuryucin
	}

	public function select_category($num, $offset)
 	{
		$query = $this->db->get('category', $num, $offset);

		return $query->result();
 	}


	public function insert_category(){
		$data=array('id_category' => $this->input->post('id_category'),
					'category'=> $this->input->post('category'));

		return $this->db->insert('category', $data);
	}

	public function get_id($id_category){
		$query =$this->db->where('id_category', $id_category)
						->limit(1)
						->get('category');
      	
		if ($query->num_rows() > 0){
			return $query->row();
		} else {
			return array();
		}
	}
	
	public function update_category($data, $id_category){
		$this->db->where('id_category',$id_category);
      	return $this->db->update('category', $data);
	}

	
	public function delete_category($id_category){
		$this->db->where('category.id_category', $id_category);
		return $this->db->delete('category');
	}
}


/* End of file category_model.php */
/* Location: ./application/models/category_model.php */