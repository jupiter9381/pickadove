<?php
    class User_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function get_users($usertype){ 
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('usertype', $usertype);
            $query = $this->db->get();
            return $query->result();
        }
    }
?>