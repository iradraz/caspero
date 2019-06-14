<?php

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
//        die;
//  Modules::run('templates/controller/landing',$data);
class Free extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function feedback_post() {
        $session_data = $this->session->userdata();
        $this->form_validation->set_rules('feedback_text', 'Feedback Text', 'required|max_length[300]');
        $post_data = $this->input->post();
        if ($this->form_validation->run() == FALSE) {
            $this->feedback();
        } else {
            if ($session_data['user_role'] == 'free') {

                $data = array(
                    'user_id' => $session_data['user_id'],
                    'feedback_text' => $post_data['feedback_text'],
                );
                $this->load->module('feedback');
                $this->feedback->_insert($data);
                redirect(base_url('/home/'));
            }
        }
    }

    function feedback() {
        $session_data = $this->session->userdata();
        if ($session_data['user_role'] == 'free') {
            $data['content_view'] = 'free/feedback_v';
            $this->templates->free($data);
        } else {
            redirect('/home/logout');
        }
    }

    function get($order_by) {
        $this->load->model('mdl_free');
        $query = $this->mdl_test->get($order_by);
        return $query;
    }

    function get_rand($order_by) {
        $this->load->model('mdl_free');
        $query = $this->mdl_test->get_rand($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_free');
        $query = $this->mdl_test->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_free');
        $query = $this->mdl_test->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_free');
        $query = $this->mdl_test->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data) {
        $this->load->model('mdl_free');
        $insert_id = $this->mdl_test->_insert($data);

        return $insert_id;
    }

    function _update($id, $data) {
        $this->load->model('mdl_free');
        $this->mdl_test->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('mdl_free');
        $this->mdl_test->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_free');
        $count = $this->mdl_test->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_free');
        $max_id = $this->mdl_test->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_free');
        $query = $this->mdl_test->_custom_query($mysql_query);
        return $query;
    }

}
