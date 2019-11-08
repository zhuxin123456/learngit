<?php

	//PHP操作数据库：新增数据

	//引入初始文件
	include_once '16database.php';

	//组织SQL指令
	$pub_time = time();
	$sql = "insert into n_news values(null,'itcast黑马程序员',1,'黑马程序员好样的','Itcaster',{$pub_time})";

	//执行SQL指令
	if(mysql_query($sql)){
		//操作成功：通常是返回自增长ID给用户
		echo '数据插入成功!';

	}else{
		//操作失败
		echo '数据插入失败！';
	}