<?php 
	header('Content-Type:text/html; charset=utf-8');

	//Cookie 읽어오기
	$userid= $_COOKIE['userid'];
	$username= $_COOKIE[username];//''생략가능
	$usernick= $_COOKIE[usernick];
	$phone= $_COOKIE[phone];

	echo "아이디 : ".$userid."<br>";
	echo "이름 : ".$username."<br>";
	echo "별명 : ".$usernick."<br>";
	echo "전화번호 : ".$phone."<br>";


 ?>