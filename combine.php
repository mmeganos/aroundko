<?php
	$files=array(
		'normalize.min.css',
		'onepcssgrid.css',
		'main.css',
	);
	
	$out=array();
	foreach($files as $f){
		$out[]=file_get_contents($f);
	}
	file_put_contents('all.css',implode("\n",$out));
?>
