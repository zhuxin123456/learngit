<?php

	//CURL扩展模拟HTTP请求
	header('Content-type:text/html;charset=utf-8');

	//开启会话
	$ch = curl_init();
	//var_dump($ch);

	//设置连接选项	
	curl_setopt($ch,CURLOPT_URL,'localhost/20select.php');	//连接选项
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);			//文件流形式返回数据（不直接显示）
	curl_setopt($ch,CURLOPT_HEADER,1);						//是否获取响应头信息

	//如果要使用post
	curl_setopt($ch,CURLOPT_POST,TRUE);
	curl_setopt($ch,CURLOPT_POSTFIELDS,array());

	//执行
	$content = curl_exec($ch);
	echo $content;

	//关闭资源
	curl_close($ch);