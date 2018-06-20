<?php
/**
* Curl model
*/
class Data_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function TranWordData($TranWord)
	{
		$info="";
		$i = 0;
		while ($i < count($TranWord)) {
				$a = $i+1;
				$info = $info.$a.'、'.$TranWord[$i].'，';
				$i++;
			}
		return $info;
	}
/*endclass*/
}