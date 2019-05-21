<?php

class Templates extends MY_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function landing($data=null) {
        $this->load->view('templates/landing_v',$data);
    }
    
    function user(){
        
    }
    
    function admin(){
        
    }
    
    function provider(){
        
    }

}
