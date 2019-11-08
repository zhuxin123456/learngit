<?php

	//接收checkbox数据
	header('Content-type:text/html;charset=utf-8');	//告诉浏览器当前服务器返回的内容是text/html，同时需要浏览器用utf-8字符集解析
	echo '<pre>';
	var_dump($_POST);