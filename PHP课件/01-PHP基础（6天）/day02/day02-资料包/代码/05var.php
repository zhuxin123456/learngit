<?php

	//变量


	//定义变量：在PHP中不需要任何关键字定义变量（赋值）
	$var1;		//定义变量
	$var2 = 1;	//定义同时赋值

	//访问变量
	echo $var2;	//通过var2变量名字找到存储的内容1，然后输出

	//修改变量
	$var2 = 2;
	echo '<hr/>',$var2;

	//删除变量：使用unset(变量名字)
	unset($var2);
	//echo $var2;


	//变量命名规则
	$var_1;$var_var_1;$_var1;	//正确格式

	$1var;

	//中文变量
	$中国 = 'China';
