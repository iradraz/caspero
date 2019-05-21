<?php

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function index(){
      $data['content_view'] = 'home/home_v';
      $this->load->module('Templates');
    //  Modules::run('templates/controller/landing',$data);
      $this->templates->landing($data);
    }
     function about(){
      $data['content_view'] = 'home/about_v';
      $this->templates->landing($data);
    }
    function dbtest(){
        echo 'hi';
        if ($this->db->simple_query('select user()'))
{
            $data['db'] = $this->db->simple_query('select user();');
            echo '<pre>';
              print_r($data['db']);
             echo '</pre>';
             die;
}
else
{
        echo "Query failed!";
}
        echo 'end hi';
    }
}
