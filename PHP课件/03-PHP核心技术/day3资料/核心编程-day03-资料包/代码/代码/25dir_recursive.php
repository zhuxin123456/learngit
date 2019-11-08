<?php

	//递归遍历文件夹

	
	//定义路径
	$dir = 'uploads';

	/*
	 * 创建函数：能够访问指定路径下的所有文件，且判断出目录还是文件
	 * @param1 string $dir，指定路径
	 * @param2 int $level = 0，层级，默认顶层
	*/
	function my_scandir($dir,$level = 0){
		//保证文件安全：如果不是路径没有必要往下
		if(!is_dir($dir))dir($dir . '<br/>');

		//读取全部路径信息，遍历输出
		$files = scandir($dir);
		foreach($files as $file){
			//$file就是一个个文件名
			echo str_repeat("&nbsp;&nbsp;",$level),$file . '<br/>';

			//排除.和..
			if($file == '.' || $file == '..') continue;

			//构造路径
			$file_dir = $dir . '/' . $file;
			//echo $file_dir . '<br/>';

			//判断路径
			if(is_dir($file_dir)){
				//递归点
				my_scandir($file_dir,$level+1);
			}

		}
	}

	//测试
	my_scandir($dir);