<?php

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
//        die;
class User extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        
    }

    function register() {
        $this->load->helper('form');

        $data['content_view'] = 'user/register_v';
        $this->templates->landing($data);
    }

    function login() {
        $name = $this->input->post('username', true);
        if ($name == 'hi') {
            echo $name;
            die;
        }
        $data['content_view'] = 'user/login_v';
        $this->templates->landing($data);
    }

    function get($order_by) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->get($order_by);
        return $query;
    }

    function get_rand($order_by) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->get_rand($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data) {
        $this->load->model('mdl_user');
        $insert_id = $this->mdl_user->_insert($data);

        return $insert_id;
    }

    function _update($id, $data) {
        $this->load->model('mdl_user');
        $this->mdl_user->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('mdl_user');
        $this->mdl_user->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_user');
        $count = $this->mdl_user->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_user');
        $max_id = $this->mdl_user->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->_custom_query($mysql_query);
        return $query;
    }

}
