<?php 
    header('Access-Control-Allow-Origin: *'); 
    header('Access-Control-Allow-Headers: Content-type, X-Auth-Token, Authorization, Origin');
    require APPPATH . 'libraries/REST_Controller.php';


    class Auth extends REST_Controller { 
        public function __construct() {
            parent::__construct();
        }

        public function index_get() {
            
            $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
        }
    }
?>