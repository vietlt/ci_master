<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class admin_model extends MY_Model
{
	protected $_table = 'tbl_admin';
	protected $_entity_name = 'admin_entity';
	protected $primary_key = 'admin_id';
	
	public function CheckLogin($account, $password)
	{     
		$this->db->where(array('account'=>$account,'password'=>$password));
		return $this->db->get($this->_table)->row();
	}
}
