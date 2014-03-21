<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class roles extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('roles_model');
    }

    public function index()
    {
        $data['title'] = 'CI-Master :: Quản trị nhóm người dùng';
        $data['all_roles'] = $this->roles_model->get_all();
        $this->load->view('roles/index', $data);
    }

    public function save()
    {
        $rolename = $this->input->post('rolename');
        $roledesc = $this->input->post('roledesc');
        if ($this->roles_model->insert(array('role_name' => $rolename, 'role_description' => $roledesc)))
            echo json_encode(array(
                'status' => true
            ));
        else
            echo json_encode(array(
                'status' => false
            ));
    }
}