<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $data['title'] = 'CI-Master :: Bảng điều khiển';
		$this->load->view('home/index',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */