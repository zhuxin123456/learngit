<?php

	//数据库操作：查询

	//引入初始化操作
	include_once '16database.php';

	//组织SQL指令
	$sql = "select * from n_news";

	//执行查询操作
	$res = mysql_query($sql);
	//var_dump($res);

	//获取结果集数据条数：多少行记录
	$rows = mysql_num_rows($res);

	//解析结果集
	$row = mysql_fetch_assoc($res);
	echo '<pre>';
	//print_r($row);

	$row = mysql_fetch_row($res);
	//print_r($row);

	//MYSQL_FETCH_ARRAY
	$row = mysql_fetch_array($res);
	print_r($row);

	//获取两种
	$row = mysql_fetch_array($res,MYSQL_BOTH);
	print_r($row);

	//获取关联
	$row = mysql_fetch_array($res,MYSQL_ASSOC);
	print_r($row);

	//获取索引
	$row = mysql_fetch_array($res,MYSQL_NUM);
	print_r($row);