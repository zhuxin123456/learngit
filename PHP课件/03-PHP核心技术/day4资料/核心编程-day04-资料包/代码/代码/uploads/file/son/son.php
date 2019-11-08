<?php


	//访问COOKIE
	var_dump($_COOKIE);

	//设定普通COOKIE
	setcookie('son1','son1');

	//设定全局访问COOKIE（localhost）
	setcookie('global_son','global_son',0,'/');