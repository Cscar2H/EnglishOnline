<?php
/**
*
*/
class Check_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/*
	*	判断用户名是否已经被注册
	*/
	public function CUser($name="")
	{
		$query = $this->db->select('UserName')->from('db_user')->get()->result_array();
		if (isset($query[0]['UserName'])) {
			if ($name == $query[0]['UserName']) {
				return 1;
			}else{
				return 0;
			}
		}
	}

	/*
	*	判断邮箱是否已经被注册
	*/
	public function CMail($mail="")
	{
		$query = $this->db->select('UserMail')->from('db_user')->get()->result_array();
		if (isset($query[0]['UserMail'])) {
			if ($mail == $query[0]['UserMail']) {
				return 1;
			}else{
				return 0;
			}
		}
	}

	/*
	* 判断邮箱格式是否正确
	*/
	public function CMailModel($mail='')
	{
		$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
		if (preg_match( $pattern, $mail )){
			return 1;
		} else {
			return 0;
		}
	}

	/*
	*	字符串过滤
	*/
	public	function strFilter($str)
	{
		$str = str_replace('`', '', $str);
		$str = str_replace('·', '', $str);
		$str = str_replace('~', '', $str);
		$str = str_replace('!', '', $str);
		$str = str_replace('！', '', $str);
		$str = str_replace('@', '', $str);
		$str = str_replace('#', '', $str);
		$str = str_replace('$', '', $str);
		$str = str_replace('￥', '', $str);
		$str = str_replace('%', '', $str);
		$str = str_replace('^', '', $str);
		$str = str_replace('……', '', $str);
		$str = str_replace('&', '', $str);
		$str = str_replace('*', '', $str);
		$str = str_replace('(', '', $str);
		$str = str_replace(')', '', $str);
		$str = str_replace('（', '', $str);
		$str = str_replace('）', '', $str);
		$str = str_replace('-', '', $str);
		$str = str_replace('_', '', $str);
		$str = str_replace('——', '', $str);
		$str = str_replace('+', '', $str);
		$str = str_replace('=', '', $str);
		$str = str_replace('|', '', $str);
		$str = str_replace('\\', '', $str);
		$str = str_replace('[', '', $str);
		$str = str_replace(']', '', $str);
		$str = str_replace('【', '', $str);
		$str = str_replace('】', '', $str);
		$str = str_replace('{', '', $str);
		$str = str_replace('}', '', $str);
		$str = str_replace(';', '', $str);
		$str = str_replace('；', '', $str);
		$str = str_replace(':', '', $str);
		$str = str_replace('：', '', $str);
		$str = str_replace('\'', '', $str);
		$str = str_replace('"', '', $str);
		$str = str_replace('“', '', $str);
		$str = str_replace('”', '', $str);
		$str = str_replace(',', '', $str);
		$str = str_replace('，', '', $str);
		$str = str_replace('<', '', $str);
		$str = str_replace('>', '', $str);
		$str = str_replace('《', '', $str);
		$str = str_replace('》', '', $str);
		$str = str_replace('.', '', $str);
		$str = str_replace('。', '', $str);
		$str = str_replace('/', '', $str);
		$str = str_replace('、', '', $str);
		$str = str_replace('?', '', $str);
		$str = str_replace('？', '', $str);
		return trim($str);
	}

/*endClass*/
}