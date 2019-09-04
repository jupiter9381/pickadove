<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Base_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
		$this->load->model("field_model", "field", true);
    }

    public function index() {
        $content['services'] = $this->field->get_services();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('services/index', $content);
        $this->load->view('templates/footer');
        $this->load->view('services/script');
    }

    public function add() {
        $value = $this->input->post('service_value');
        $data = array(
            'type' => 4,
            'name' => $value,
            'required' => 0,
            'values' => '',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s")
        );
        $this->field->add_value($data);
        redirect('/services');
    }

    public function delete() {
        $id = $this->input->post('id');
        $this->field->delete($id);
    	echo json_encode(array("result" => "Deleted Successfully!"));
    }
}