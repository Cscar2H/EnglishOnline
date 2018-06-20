<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Check_Model');
		$this->load->model('User_Model');
		$this->load->model('Mail_Model');
		$this->load->helper('comm');
	}

	/*
	* 用户登录
	*/
	public function Login()
	{
		$name = $this->input->post('LoginName', true);
		$pass = $this->input->post('LoginPassword', true);


	}

	/*
	* 用户注册
	*/
	public function Sign()
	{
		$data['UserName'] = $this->input->post('SignName', true);
		$data['UserPassword'] = $this->input->post('SignPassword', true);
		$data['UserMail'] = $this->input->post('SignEmail', true);
		$data['UserPassword'] = $this->User_Model->EncryptionPass($data);
		$Code = hash('md5', $data['UserName']);
		$Subject = "SC英语在线学习系统，帐号激活";
		$content = "点击以下连接完成注册，<a href='".site_url('/admin/auth/SignActive/').urlencode($data['UserName'])."/".$Code."' target='_blank'>".site_url('/admin/auth/SignActive/').urlencode($data['UserName'])."/".$Code."</a>";
		$bool = $this->Mail_Model->send($data['UserMail'], $data['UserName'], $Subject, $content);
		if ($bool) {
			$bool = $this->User_Model->Inset($data);
			msg('',"激活邮件已发到您的邮箱，请尽快到邮箱里激活，完成后续注册，如果没有收到，请查看垃圾邮箱");
		}
		msg('welcome/logout', '数据发送失败，请重新注册');
	}

	/*
	* 帐号激活
	*/
	public function SignActive($Name, $Code)
	{
		$Name = urldecode($Name);
		$bool = $this->Check_Model->CUser($Name);
		echo $HashName = hash('md5', $Name);
		$data['UserName'] = array('UserName' => $Name, );
		$data['UserActive'] = array('UserActive' => 1, );
		if ($bool) {
			if ($HashName == $Code) {
				$bool=$this->User_Model->update($data);
				if ($bool) {
					msg('','激活帐号成功！！');
				}
			}
		}
		msg('','激活帐号失败，请重新激活！');
	}

	/*
	* 判断是否处于登录状态
	*/
	public function CKLogin()
	{
		$this->load->view("logout");
	}

	/*
	*	检查用户名
	*/
	public function CKUser()
	{
		$name = $this->input->post('word', true);
		$strFilter = $this->Check_Model->strFilter($name);
		($name == $strFilter)?"":die('有用户名只能由字母、数字、和中文组成!');
		$bool = $this->Check_Model->CUser($name);
		if ($bool) {
			die($name."，该用户名已注册，请使用其他用户名注册！");
		}
	}
	/*
	*	检查邮箱
	*/
	public function CKMail()
	{
		$mail = $this->input->post('word', true);
		$CKMail = $this->Check_Model->CMailModel($mail);
		($CKMail)?"":die($mail."，该邮箱格式不合法！");
		$bool = $this->Check_Model->CMail($mail);
		if ($bool) {
			die($mail."，该邮箱已注册！");
		}
	}
}
