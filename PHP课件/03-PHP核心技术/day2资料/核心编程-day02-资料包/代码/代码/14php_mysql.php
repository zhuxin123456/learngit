<?php

	//PHP操作数据库的基本连接操作

	//建立连接
	//1、主机地址：默认是自动连接端口3306
	$link = mysql_connect('localhost:3306','root','root');
	//var_dump($link);

	//设定字符集
	//$res = mysql_query('set names utf8',$link);
	$res = mysql_set_charset('utf8');
	//var_dump($res);

	//选择数据库
	$res = mysql_query('use test');
	//var_dump($res);

	//数据库操作：对数据的增删改查

	//关闭资源
	$res = mysql_close($link);
	var_dump($res);