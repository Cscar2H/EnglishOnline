<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/*
	* 插入数据
	*/
	public function Inset($data='')
	{
		$data['UserTime'] = time();
		$data['UserClass'] = isset($data['UserClass'])?$data['UserClass']:"oneX";
		$bool=$this->db->insert('db_user',$data);
		return $bool;
	}

	/*
	* 插入数据
	*/
	public function update($data='')
	{
		$bool=$this->db->update('db_user', $data['UserActive'], $data['UserName']);
		return $bool;
	}

	/*
	* 密码加密
	*/
	public function EncryptionPass($data="")
	{
		$data = md5($data['UserPassword'].$data['UserName']);
		return $data;

	}
}
