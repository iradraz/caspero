<?php

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['content_view'] = 'home/home_v';
        //  Modules::run('templates/controller/landing',$data);
        $this->templates->landing($data);
    }

    function about() {
        $data['content_view'] = 'home/about_v';
        $this->templates->landing($data);
    }

    function test() {
        echo 'hello';
    }

}