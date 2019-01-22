<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Guestbook_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database('db_dapuryucin');  //panggil database db_dapuryucin
	}

	public function select_guestbook($num, $offset){
		$query = $this->db->get('guestbook', $num, $offset); //get semua yang ada di tabel guestbook (fungsi select)
		return $query->result(); 
	}

	public function select_status($status){
		$query =$this->db->where('status', $status)
						->order_by('datetime', 'desc')
						->get('guestbook');
		return $query->result(); 
      	
	}

	public function change_status($id_guest, $status){
		$this->db->where('id_guest',$id_guest);
      	return $this->db->update('guestbook', $status);
	}

	public function insert_guestbook(){
		$data=array('name'=> $this->input->post('name'),
					'email' => $this->input->post('email'),
					'comment' =>$this->input->post('comment'));

		return $this->db->insert('guestbook', $data);
	}

 
	public function delete_guestbook($id_guest){
		$this->db->where('guestbook.id_guest', $id_guest);
		return $this->db->delete('guestbook');
	}


	
}


/* End of file guestbook_model.php */
/* Location: ./application/models/author_model.php */