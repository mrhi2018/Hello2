<?php 
	header('Content-Type:text/html; charset=utf-8');

	//DB에 저장할 데이터들
	$name= 'sam';
	$msg= 'Hello world';
	$now= date('Y-m-d h:i:s');

	//데이터베이스관리시스템(DBMS : MySQL)에 연결
	$conn= mysqli_connect('localhost', 'mrhi', '1234', 'test');

	// 원하는 쿼리문(SQL) 작성
	//1) TABLE 생성
	$sql= "CREATE TABLE IF NOT EXISTS board(no INTEGER PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), msg TEXT, now DATETIME)";
	//mysql에게 쿼리문 요청
	mysqli_query($conn, $sql) or die('생성 실패!');

	//한글 깨짐 방지
	mysqli_query($conn, 'set names utf8');

	//2) 데이터 삽입
	$sql= "insert into board(name, msg, now) values('$name','$msg','$now')";
	$result= mysqli_query($conn, $sql);
	if($result) echo "insert 성공";
	else echo "insert 실패";

	//3) 데이터 읽어오기
	$sql= "select * from board";
	$result= mysqli_query($conn, $sql);

	//결과로 나온 result의 총 레코드(row)수 얻어오기
	$row_num= mysqli_num_rows($result);

	//반복해서 한줄씩 읽어와서 출력하기.
	for($i=0; $i<$row_num; $i++){
		$row= mysqli_fetch_array($result, MYSQLI_ASSOC);//연관배열로 row받기
	?>

		<h2><?=$row[name]?></h2>
		<p><?=$row[msg]?></p>
		<p><?=$row[now]?></p>
		<hr>

	<?
	}

	//데이터 베이스 닫기
	mysqli_close($conn);

 ?>