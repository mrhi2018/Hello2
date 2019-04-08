<?php 
	header('Content-Type:text/html; charset=utf-8');

	//PDO(Php Data Object)객체는 php 5.5버전부터 가능.
	//phpinfo();

	//DB에 저장할 데이터들.
	$name= "sam";
	$msg= "Hello world";
	$now= date("Y/m/d h:i:s");

	// PDO객체 생성- 지원가능 DBMS: mysql, oracle, sqlite, mssql, sybase etc..
	$db= new PDO('mysql:host=localhost;dbname=mrhi2018','mrhi2018','asdf1234');

	// $db는 객체 참조변수(포인터변수)
	//DB제어 SQL문 실행.
	//1) create
	$db->exec("CREATE TABLE IF NOT EXISTS sss(no INTEGER PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20) NOT NULL, msg TEXT, now DATETIME)");

	//2) insert
	$db->exec("INSERT INTO sss(name, msg, now) VALUES('$name','$msg','$now')");

	//3) select
	$result= $db->query("SELECT * from sss");

	// $result는 요청 결과 테이블이 있음.
	while(  $row= $result->fetch() ){
		echo "$row[no], $row[name], $row[msg], $row[now]<hr>";
	}


 ?>