<?php
    class Review_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function get_comments() {
            $this->db->select('reviews.*, users.email recevier_email, users.firstname, users.lastname');
            $this->db->from('reviews');
            $this->db->join('users', 'users.id = reviews.receiver_id');
            $this->db->where('type', 1);
            $query = $this->db->get();
            return $query->result();
        }
        public function get_complaints() {
            $this->db->select('reviews.*, users.email recevier_email, users.firstname, users.lastname');
            $this->db->from('reviews');
            $this->db->join('users', 'users.id = reviews.receiver_id');
            $this->db->where('type', 2);
            $query = $this->db->get();
            return $query->result();
        }
        public function delete($id) {
            $condition = array(
                'id' => $id
            );
            $this->db->where($condition);
            $this->db->delete('reviews');
            return;
        }
    }
?>