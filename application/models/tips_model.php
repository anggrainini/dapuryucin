<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Tips_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database('db_dapuryucin');  //panggil database db_dapuryucin
	}

	public function select_tips($num, $offset){
		$this->db->select('*');
		$this->db->from('tips');
		$this->db->join('author', 'tips.id_author = author.id_author');

		$query = $this->db->get('',$num, $offset);
		return $query->result(); 
	}

	public function select_lim3(){
		$this->db->select('*');
		$this->db->from('tips');
		$this->db->join('author', 'tips.id_author = author.id_author');

    	$query = $this->db->limit(3)
    					->get();

    	return $query->result ();
    	
	}

	public function select_full($id_tips){
		$this->db->select('*');
		$this->db->from('tips');
		$this->db->join('author', 'tips.id_author = author.id_author');

    	$query = $this->db->where('id_tips', $id_tips)
    					->limit(1)
    					->get();

    	return $query->result ();
    	
	}

	public function select_author(){
		$query = $this->db->get('author'); 
		return $query->result(); 
	}

	public function insert_tips(){
		$data=array('id_tips' => $this->input->post('id_tips'),
					'title'=> $this->input->post('title'),
					'summary'=> $this->input->post('summary'),
					'tips_desc' => $this->input->post('tips_desc'),
					'id_author' => $this->input->post('id_author')
					);

		return $this->db->insert('tips', $data);
	}

	public function get_id($id_tips){
		$query =$this->db->where('id_tips', $id_tips)
						->limit(1)
						->get('tips');
      	
		if ($query->num_rows() > 0){
			return $query->row();
		} else {
			return array();
		}
	}
	
	public function update_tips($data, $id_tips){
		$this->db->where('id_tips',$id_tips);
      	return $this->db->update('tips', $data);
	}

	
	public function delete_tips($id_tips){
		$this->db->where('tips.id_tips', $id_tips);
		return $this->db->delete('tips');
	}
}


/* End of file tips.php */
/* Location: ./application/models/tips_model.php */