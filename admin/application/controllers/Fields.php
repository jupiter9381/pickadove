<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fields extends Base_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
		$this->load->model("field_model", "field", true);
    }
    
    public function index(){
        $fields = $this->field->get_fields();

        $content['fields'] = $fields;

        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('fields/index', $content);
        $this->load->view('templates/footer');
        $this->load->view('fields/script');
    }

    public function add() {
        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('fields/add');
        $this->load->view('templates/footer');
        $this->load->view('fields/script');
    }

    public function addValue(){
        $type = $this->input->post('type');
        $required = $this->input->post('required');
        $name = $this->input->post('name');
        if($required == "on") $required = "1";
        else $required = "0";

        if ($type == "1") {
            $data = array(
                "name" => $name,
                'type' => $type,
                'required' => $required,
                'created_at' => date("Y-m-d h:i:s"),
                'updated_at' => date("Y-m-d h:i:s"),
            );
        } else if ($type == "2") {
            $values = json_encode($this->input->post('values'));
            $data = array(
                "name" => $name,
                'type' => $type,
                'required' => $required,
                'values' => $values,
                'created_at' => date("Y-m-d h:i:s"),
                'updated_at' => date("Y-m-d h:i:s"),
            );
        } else if ( $type == "3") {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['file_name'] = $_FILES["icon"]['name'];

            $this->load->library('upload', $config);
            
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('icon')){
                $error = array('error' => $this->upload->display_errors());
                
            } else {
                $this->upload->data();

                $data = array(
                    "name" => $name,
                    'type' => $type,
                    'required' => $required,
                    'values' => "uploads/" . $_FILES["icon"]['name'],
                    'created_at' => date("Y-m-d h:i:s"),
                    'updated_at' => date("Y-m-d h:i:s"),
                );
            }
        }

        $this->field->add_value($data);
        redirect('/fields/add');
    }
    public function delete() {
        $id = $this->input->post('id');
        $this->field->delete($id);
    	echo json_encode(array("result" => "Deleted Successfully!"));
    }
}