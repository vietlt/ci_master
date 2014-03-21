<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()
    {
        if($this->session->userdata('account_info'))
        {
            redirect('backend/home','location');die();
        }
        $dir = $this->config->item('backend_template_dir');
        $this->load->default_view('backend/' . $dir . '/login/index');
    }

    public function check_login()
    {
        $account_name = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $rs = $this->admin_model->CheckLogin($account_name, $password);
        if ($rs) {
            $userdata = array(
                'account_name' => $rs->account,
                'email' => $rs->email,
                'full_name' => $rs->full_name);
            $this->session->set_userdata('account_info', $userdata);
            echo json_encode(array(
                'status' => true
            ));
        } else
            echo json_encode(array(
                'status' => false,
                'result' => 'Thông tin không chính xác'
            ));
    }

    public function logout()
    {
        $this->session->unset_userdata('account_info');
        redirect('backend/login','location');
    }
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */
