<?php
    class Phar_ChangeDetails_Pw extends Controller{
        public function __construct(){
            parent::__construct();

            $this->load->database();
            $this->load->helper('url');
            $this->load->helper(array('form'));
            $this->load->library(array('form_validation'));
        }
        public function changeDetails(){
            $this->load->view('change_details_password');

        }
    }
?>