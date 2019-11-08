<?php

	//目录操作

	//创建目录
	$res = @mkdir('directory');
	//var_dump($res);

	//删除目录
	@rmdir('dir');

	//读取目录
	$r = opendir('uploads');
	//var_dump($r);

	//读取资源
	//echo readdir($r),'<br/>';
	//echo readdir($r),'<br/>';
	//echo readdir($r),'<br/>';

	//循环遍历输出
	while($file = readdir($r)){
		echo $file,'<br/>';
	}

	//关闭资源
	closedir($r);


	//其他函数
	$dir1 = 'E:/server/apache/htdocs';
	$dir2 = 'E:/server/apache/24file_dir.php';

	//var_dump(dirname($dir1),dirname($dir2));
	//var_dump(realpath($dir1),realpath($dir2));
	//var_dump(is_dir($dir1),is_dir($dir2));


	echo '<pre>';
	//遍历文件夹
	var_dump(scandir('uploads'));