<?php
function create_dir($dir)
{
	if(!file_exists($dir))
	{
		mkdir($dir,0777,true);
	}
}
function saveNetImg($url)
{
	ob_start();
	readfile($url);
	$file = ob_get_contents();
	ob_end_clean();
	$key = md5($file);
	$dir = 'data/image/';
	$path = $dir.$key.'jpg';
	file_put_contents($path,$file);
	return $key;
}