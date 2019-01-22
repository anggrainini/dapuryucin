<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
                         

    public function load_form_rules()
    {
        $form_rules = array(
                            array(
                                'field' => 'username',
                                'label' => 'Username',
                                'rules' => 'required'
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'Password',
                                'rules' => 'required'
                            ),
        );
        return $form_rules;
    }

    public function validasi()
    {
        $form = $this->load_form_rules();
        $this->form_validation->set_rules($form);

        if ($this->form_validation->run())
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function cek_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username', $username);
        $this->db->where('password', md5($password.$this->config->item('encryption_key')));
        $this->db->limit(1);
        $query=$this->db->get('user');

        if ($query->num_rows() == 1)
        {
            $data = array('username' => $username, 'login' => TRUE);
            // buat data session jika login benar
            $this->session->set_userdata($data);
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('username' => '', 'login' => FALSE)); //kita set kebalikan nya kita set FALSE
        $this->session->sess_destroy();
    }
}