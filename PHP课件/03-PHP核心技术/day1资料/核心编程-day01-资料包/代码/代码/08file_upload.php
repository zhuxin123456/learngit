<?php

	//检查文件
	header('Content-type:text/html;charset=utf-8');
	//echo '<pre>';

	//var_dump($_POST);
	//var_dump($_FILES);

	//1、取得文件信息
	$file = $_FILES['image'];

	//2、判断是否是上传文件：临时文件
	if(is_uploaded_file($file['tmp_name'])){
		//是上传文件
		if(move_uploaded_file($file['tmp_name'],'uploads/' . $file['name'])){
			echo '文件保存成功！';
		}else{
			echo '文件保存失败！';
		}
	}else{
		//不是上传文件
		echo '文件上传失败！';
	}