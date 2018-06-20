<?php
function msg($url, $msg) {
	if ($msg=='') {
		redirect($url);
		exit();
	} else {
		$url = site_url($url);
		echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
		//alert($msg);
		//back('refresh', site_url($url));
		exit();
	}
	//die();
}