<?php
	//$link_id=mysql_connect('主机名'，'用户','密码') or mysql_error();
	if($link_id){
		echo "mysql successful connected!";
	}eles{
		echo mysql_error();
	}
?>
