<?php

	//PHP操作数据库：删除数据

	//引入初始文件
	include_once '16database.php';

	//组织SQL指令：实际删除时通常也是根据ID进行删除，但是ID都是传递过来
	$sql = "delete from n_news where id = 1";

	//执行SQL指令
	if(mysql_query($sql)){
		//操作成功
		echo '数据删除成功!';

	}else{
		//操作失败
		echo '数据删除失败！';
	}