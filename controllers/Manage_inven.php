<?php
    class Manage_inven extends Controllers{
        public function __construct(){
            parent::__construct();

            $this->load->database();
            $this->load->helper('url');
            $this->load->helper(array('form'));
            $this->load->library(array('form_validation'));

        }
        public function inventoryManage(){
            $this->load->view('manage_inventory');
        }

        public function viewStatistic(){
            $this->load->view('weekly_statistics');
        }

        public function monthStatistic(){
            $this->load->view('monthly_statistics');
        }

        public function yearStatistic(){
            $this->load->view('yearly_statistics');
        }

        public function inventoryView(){
            $this->load->view('view_inventory');
        }

        public function inventoryUpdate(){
            $this->load->view('update_inventory');
        }
        
    }

?>