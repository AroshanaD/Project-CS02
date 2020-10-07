<?php
    class Phar_ChangeDetails_Pw extends CI_controller{
        public function __construct(){
            parent::__construct();

            $this->load->database();
            $this->load->helper('url');
           // $this->load->model('Reg_Model');
            $this->load->helper(array('form'));
            $this->load->library(array('form_validation'));
            $this->load->library('pdf');
        }
        public function changeDetails(){
            $this->load->view('change_details_password');

        }
    }
?>