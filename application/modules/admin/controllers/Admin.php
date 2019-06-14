<?php

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
//        die;
class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        echo '!';
    }

    function feedback() {
        $session_data = $this->session->userdata();
        if ($session_data['user_role'] == 'admin') {
            $data['content_view'] = 'admin/feedback_v';
            $this->templates->free($data);
        } else {
            redirect('/home/logout');
        }
    }

    function get($order_by) {
        $this->load->model('mdl_admin');
        $query = $this->mdl_test->get($order_by);
        return $query;
    }

    function get_rand($order_by) {
        $this->load->model('mdl_admin');
        $query = $this->mdl_test->get_rand($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_admin');
        $query = $this->mdl_test->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_admin');
        $query = $this->mdl_test->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_admin');
        $query = $this->mdl_test->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data) {
        $this->load->model('mdl_admin');
        $insert_id = $this->mdl_test->_insert($data);

        return $insert_id;
    }

    function _update($id, $data) {
        $this->load->model('mdl_admin');
        $this->mdl_test->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('mdl_admin');
        $this->mdl_test->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_admin');
        $count = $this->mdl_test->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_admin');
        $max_id = $this->mdl_test->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_admin');
        $query = $this->mdl_test->_custom_query($mysql_query);
        return $query;
    }

}
