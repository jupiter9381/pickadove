<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller {

	public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/menu' );
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
	}
}
