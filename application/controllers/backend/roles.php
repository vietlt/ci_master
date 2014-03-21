<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class roles extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('roles_model');
    }

    public function index()
    {
        $data['title'] = 'CI-Master :: Quản trị nhóm người dùng';
        $this->load->view('roles/index',$data);
    }
}