<?php 
header("Content-type:text/html;charset=utf-8");
//���$_SERVER��Ϣ
$str = '';
$str = "�ĵ���Ŀ¼��" . $_SERVER['DOCUMENT_ROOT'];
$str .= "<br />�����ǰҳ����û��� IP ��ַ��" . $_SERVER['REMOTE_ADDR'];
$str .= "<br />������" . $_SERVER['SERVER_NAME'];
$str .= "<br />��ǰ���нű����ڵķ������� IP ��ַ�� " . $_SERVER['SERVER_ADDR'];
echo $str;