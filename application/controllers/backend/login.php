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
		$dir = $this->config->item('backend_template_dir');
		$this->load->default_view('backend/' . $dir . '/login/index');
	}
	
	public function check_login()
	{
		// $this->input->post('username');
		// $this->input->post('password');
		$account_name = 'admin';
		$password = '96e79218965eb72c92a549dd5a330112';
		// $rs = $this->admin_model->CheckLogin($account_name, $password);
		$rs = $this->admin_model->CheckLogin($account_name, $password);

		echo json_encode(array(
		            'status' => true,
		            'data' => $rs->account
		        ));
	}
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */
