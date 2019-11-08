<?php

	//将复选框内容存储到数据库

	//表示设计
	/*
		id	name	gender	hobby
		1	mark	男		篮球,足球,乒乓球
	*/

	header('Content-type:text/html;charset=utf-8');
	$hobby = isset($_POST['hobby']) ? $_POST['hobby'] : array();
	//print_r($hobby);

	//数组转换成有格式的字符串
	$hobby_string = implode($hobby,'|');
	echo $hobby_string;


	//假设$hobby_string是从数据库取出来的字段
	var_dump(explode('|',$hobby_string));