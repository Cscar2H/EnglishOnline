<?php
/**
* Curl model
*/
class Curl_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function Curl($url)
	{
		//1.0 初始化
		$ch = curl_init();
		//2.1 设置参数
		curl_setopt($ch, CURLOPT_URL, $url);
		//2.1 设置返回,CURLOPT_RETURNTRANSFER TRUE 将curl_exec()获取的信息以字符串返回，而不是直接输出。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		//3.0 调用接口（采集信息）,这里获取到是数据是json格式
		$res = curl_exec($ch);
		//4.0 关闭curl
		//如果获取出错，则打印错误
		if (curl_errno($ch)) {
			var_dump(curl_error($ch));
		}
		curl_close($ch);
		$arr = json_decode($res, true);
		return $arr;
	}
/*endclass*/
}