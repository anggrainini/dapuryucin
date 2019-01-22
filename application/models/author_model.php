<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Author_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database('db_dapuryucin');  //panggil database db_dapuryucin
	}

	public function select_author($num, $offset){
		$query = $this->db->get('author',$num, $offset); //get semua yang ada di tabel author (fungsi select)
		return $query->result(); 
	}

	public function insert_author(){
		$data=array('id_author' => $this->input->post('id_author'),
					'name_author'=> $this->input->post('name_author'));

		return $this->db->insert('author', $data);
	}

	public function get_id($id_author){
		$query =$this->db->where('id_author', $id_author)
						->limit(1)
						->get('author');
      	
		if ($query->num_rows() > 0){
			return $query->row();
		} else {
			return array();
		}
	}
	
	public function update_author($data, $id_author){
		$this->db->where('id_author',$id_author);
      	return $this->db->update('author', $data);
	}

	
	public function delete_author($id_author){
		$this->db->where('author.id_author', $id_author);
		return $this->db->delete('author');
	}
}


/* End of file author_model.php */
/* Location: ./application/models/author_model.php */