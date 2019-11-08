<?php

	//PHP文件编程：文件操作

	//PHP5操作

	//读取内容
	$file = 'content.txt';
	//$content = @file_get_contents($file);
	//var_dump($content);

	//写入内容
	$text = 'hello world';
	//$res = file_put_contents($file,$text);
	//var_dump($res);

	//PHP4操邹

	//打开文件资源：确定操作模式
	$f = fopen($file,'r');
	//var_dump($f);

	//读取内容
	//$string = fread($f,10);
	$string = fread($f,filesize($file));
	echo $string;

	//写操作对比
	$f1 = fopen('con1.txt','w');
	$f2 = fopen('con2.txt','a');

	//写入内容
	fwrite($f1,'hello');
	fwrite($f2,'hello');


	//关闭资源
	fclose($f);