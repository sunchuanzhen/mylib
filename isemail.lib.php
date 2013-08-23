<?php

function isEmail($email){
	echo $email;
	$len = strlen($email);
	return  $len >= 8 && $len <= 32 && preg_match("/^([A-Za-z0-9\-_.]+)@([A_Za-z0-9\-]+[.][A-Za-z0-9]+)$/",$email);

}

?>