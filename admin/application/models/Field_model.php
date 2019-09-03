<?php
    class Field_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function get_fields() {
            $this->db->select('*');
            $this->db->from('fields');
            $this->db->where('type !=', 4);
            $query = $this->db->get();
            return $query->result();
        }

        public function get_services() {
            $this->db->select('*');
            $this->db->from('fields');
            $this->db->where('type', 4);
            $query = $this->db->get();
            return $query->result();
        }

        public function add_value($data) {
            $this->db->insert('fields', $data);
            return;
        }
    }
?>