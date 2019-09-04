<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends Base_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
		$this->load->model("review_model", "review", true);
    }

    public function comments() {
        $content['comments'] = $this->review->get_comments();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('reviews/comments', $content);
        $this->load->view('templates/footer');
        $this->load->view('reviews/script');
    }

    public function complaints() {
        $content['complaints'] = $this->review->get_complaints();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('reviews/complaints', $content);
        $this->load->view('templates/footer');
        $this->load->view('reviews/script');
    }
    public function delete() {
        $id = $this->input->post('id');
        $this->review->delete($id);
        echo json_encode(array("result" => "Deleted Successfully!"));
    }
}