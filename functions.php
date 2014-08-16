<?php

function ve($v = null){
	try{
		$rv = var_export($v, true);
		#print "\n";
		fwrite(STDOUT, $rv."\n");
	}
	catch(Exception $e){
		print "ERROR: ".$e->getMessage()."\n";
	}
}

function vej($v = null){
	try{
		ve(json_encode($v));
	}
	catch(Exception $e){
		print "ERROR: ".$e->getMessage()."\n";
	}
}

function vew($v = null){
	try{
		print '<pre>';
		var_export($v, true);
		print '</pre>';
	}
	catch(Exception $e){
		print "ERROR: ".$e->getMessage()."\n";
	}
}

function strIsUuid($str){
	# UUID v4: xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx where x is any hexadecimal digit and y is one of 8, 9, A, or B
	# xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx
	if(preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i', $str)){
		return true;
	}
	
	return false;
}

function strIsIp($ip){
	if(preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $ip)){
		return true;
	}
	return false;
}
