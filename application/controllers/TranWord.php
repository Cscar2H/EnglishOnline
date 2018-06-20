<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TranWord extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Curl_Model');
		$this->load->model('Data_Model');
	}

	public function index()
	{
		$info ='';
		$word = $this->input->post('word', TRUE);
		$key 	= "326490307";
		$keyfrom = "EnglishOnline";
		$va = urlencode($word);
		$url = "http://fanyi.youdao.com/openapi.do?keyfrom=".$keyfrom."&key=".$key."&type=data&doctype=json&version=1.1&q=".$va;
		$TranWord = $this->Curl_Model->Curl($url);
		if ($va) {
			if (isset($TranWord['basic']['explains'])) {
				$info = $this->Data_Model->TranWordData($TranWord['basic']['explains']);
				echo "单词翻译：".$info."</br>";
			}
			if (isset($TranWord['translation'])) {
				$info = $this->Data_Model->TranWordData($TranWord['translation']);
				echo "翻译：".$info."</br>";
				die();
			} else {
				echo $info = '查询不到该单词(The query is less than the words)';
				die();
			}
		}
	}

/*endClass*/
}
