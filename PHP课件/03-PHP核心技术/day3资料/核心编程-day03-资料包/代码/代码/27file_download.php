<?php

	//PHP文件下载

	//设定解析字符集
	header('Content-type:text/html;charset=utf-8');

	$file = '27file_download.php';

	//设定下载响应头
	header('Content-type:application/octem-stream');			//以文件流形式传输数据给浏览器
	header('Accept-ranges:bytes');								//以字节方式计算
	header('Content-disposition:attachment;filename=' . $file);	//附件下载，指定命名
	header('Accept-length:' . filesize($file));

	//如果文件的名字是从文件夹读取出来，而且存在中文，那么如果直接使用名字作为下载名字会出现乱码
	//出现这种情况需要进行字符集转码：从GBK转成UTF-8：$file = iconv('GBK','UTF-8',$file);

	//输出文件
	//php5：小文件
	//echo file_get_contents($file);

	//php4：大文件
	$f = @fopen($file,'r') or die();

	//方案1：直接读，然后输出
	while($row = fread($f,1024)){
		echo $row;
	}

	//方案2：判定是否可读，然后再读
	/*
	while(!feof($f)){
		echo fread($f,1024);
	}*/

	//关闭资源
	fclose($f);