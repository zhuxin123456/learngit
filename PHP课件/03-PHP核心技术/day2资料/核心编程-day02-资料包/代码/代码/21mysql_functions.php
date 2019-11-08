<?php

	//PHP-MYSQL相关扩展函数

	//引入数据库初始化
	include_once '16database.php';

	//组织查询操作
	$sql = "select * from n_news";
	$res = mysql_query($sql);

	//错误判定
	if(!$res){
		//代表结果为false
		echo 'SQL指令执行出错，错误编号为：' . mysql_errno() . '<br/>';
		echo 'SQL指令执行出错，错误信息是：' . mysql_error() . '<br/>';
		//终止代码执行
		exit();
	}


	//查询当前结果集中所有的字段数量
	//echo mysql_num_fields($res);

	//查询指定列的字段名字
	//echo mysql_field_name($res,1);

	//获取自增长ID
	$pub_time = time();
	$sql = "insert into n_news values(null,'itcast好时光',2,'黑马程序员好样的，都知道','Itcaster',{$pub_time})";

	$res = mysql_query($sql);
	if(!$res){
		//代表结果为false
		echo 'SQL指令执行出错，错误编号为：' . mysql_errno() . '<br/>';
		echo 'SQL指令执行出错，错误信息是：' . mysql_error() . '<br/>';
		//终止代码执行
		exit();
	}

	echo mysql_insert_id();