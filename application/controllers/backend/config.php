<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class config extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('config_model');
    }

    public function index()
    {
        $data['title'] = 'Cấu hình webiste';
        $data['config'] = $this->config_model->get(1);
        $this->load->view('config/index',$data);
    }

    public function save()
    {
        $options = $this->input->post('txtOption');
        $name_website = $this->input->post('txtName');
        $logo = $this->input->post('txtLogo');
        $about = $this->input->post('txtAbout');
        $mail = $this->input->post('txtMail');
        $pass = $this->input->post('txtPass');

        $data = array(
            'name_website'=>$name_website,
            'logo'=>$logo,
            'about'=>$about,
            'option'=>json_encode($options),
            'email_system'=>$mail,
            'password'=>$pass);
        $this->config_model->update(1,$data);
        echo 'Update successfull';
    }
}