<?php

	//PHP操作数据库：更新数据

	//引入初始文件
	include_once '16database.php';

	//组织SQL指令：实际更新时通常也是根据ID进行更新，但是ID都是传递过来
	$sql = "update n_news set content = '黑马程序员好牛' where id = 1";

	//执行SQL指令
	if(mysql_query($sql)){
		//操作成功
		echo '数据更新成功!';

	}else{
		//操作失败
		echo '数据更新失败！';
	}