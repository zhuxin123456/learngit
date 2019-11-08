<?php

	header('Content-type:text/html;charset=utf-8');
	echo '<pre>';

	//查看不同情形下的多文件上传结构
	//print_r($_FILES);


	//不同名文件遍历处理方式
	/*
	foreach($_FILES as $file){
		//$file就是一个完整的上传文件信息：找到临时路径，指定存放路径
		if(is_uploaded_file($file['tmp_name'])){
			//存储
			move_uploaded_file($file['tmp_name'],'uploads/' . $file['name']);
		}
	}*/

	//同名文件遍历处理方式
	//此时遍历$_FILES没有意义，只有一个数组元素；应该变量$_FILES['userfile']['任意一个要素：name|tmp_name|size|error|type']
	//判断元素存在而且是数组：name有代表是文件，name元素有多个（数组）代表是同名批量上传
	if(isset($_FILES['image']['name']) && is_array($_FILES['image']['name'])){
		//遍历构造数组元素
		$images = array();		//存储所有的文件信息，一个元素代表一个文件（数组）
		foreach($_FILES['image']['name'] as $k => $file){
			$images[] = array(
				'name' => $file,
				'tmp_name' => $_FILES['image']['type'][$k],
				'type' => $_FILES['image']['tmp_name'][$k],
				'error' => $_FILES['image']['error'][$k],
				'size' => $_FILES['image']['size'][$k]
			);
		}
	
	}

	print_r($images);