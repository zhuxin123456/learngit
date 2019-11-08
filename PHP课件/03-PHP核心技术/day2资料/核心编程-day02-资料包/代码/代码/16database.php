<?php

	//做数据库初始化
	header('Content-type:text/html;charset=utf-8');


	//连接认证
	mysql_connect('localhost:3306','root','root') or die('数据库连接失败');

	//设定字符集
	mysql_query('set names utf8');

	//选择数据库
	mysql_query('use News');