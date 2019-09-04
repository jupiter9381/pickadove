<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Base_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
		$this->load->model("user_model", "user", true);
        
    }

	public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }
    
    public function advertisers() {
        $advertisers = $this->user->get_users(1);

        $content['advertisers'] = $advertisers;

        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('users/advertisers', $content);
        $this->load->view('templates/footer');
        $this->load->view('users/script');
    }

    public function browsers() {
        $browsers = $this->user->get_users(2);

        $content['browsers'] = $browsers;

        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('users/browsers', $content);
        $this->load->view('templates/footer');
        $this->load->view('users/script');
    }

    public function edit($id) {
        $user = $this->user->get_user($id);

        $content['user'] = $user[0];
        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('users/edit', $content);
        $this->load->view('templates/footer');
    }

    public function delete(){
        $id = $this->input->post('id');
        $this->user->delete($id);
        echo json_encode(array("result" => "Deleted Successfully!"));
    }
}