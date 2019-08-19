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
    }
}