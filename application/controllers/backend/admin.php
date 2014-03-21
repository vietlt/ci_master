<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()
    {
        $admin_model = new admin_model;
        $data['all_admin'] = $admin_model->get_all();
        $data['title'] = 'CI-Master :: Quản trị admin';
        $this->load->view('admin/index',$data);
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */