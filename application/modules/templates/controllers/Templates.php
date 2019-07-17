<?php

class Templates extends MY_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function landing($data=null) {
        $this->load->view('templates/landing_v',$data);
    }
    
    function free($data=null){
        $this->load->view('templates/free_v',$data);
    }
    
    function admin($data=null){
        $this->load->view('templates/admin_v',$data);
    }

    function temp($data=null) {
        $this->load->view('templates/temp_v',$data);
    }
}
