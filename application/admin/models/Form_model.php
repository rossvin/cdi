<?php

class Form_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_users($fam = FALSE)
    {
        if ($fam === FALSE) {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('fam' => $fam));
        return $query->row_array();
    }

    public function get_user_by_id($id = 0)
    {
        if ($id === 0) {
            $query = $this->db->get('users');
            return $query->result_array();
        }
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();

    }
    public function set_users($id =0)
    {
        $this->load->helper('url');

       $data = array(

            'fam' => $this->input->post('fam'),
            'im' => $this->input->post('im'),
            'otch' => $this->input->post('otch')
        );

        if ($id == 0) {
            return $this->db->insert('users', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('users', $data);
        }
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}