<?php 
//윈도우 운영체제 : 파일명 대소문자 구분없음
//리눅스 운영체제 : 파일명 대문자 구분
include "dbconf.php";
require "database.php";
require "table.php";

$config = include "dbconf.php";
$db = new Database($config);
$table = new Table($db);
// 테이블 객체를 생성해서 연결
//$db->setTable($table)->getTable()->createTable(); // 연결된 객체 읽기
$db->getTable()->createTable("members2",[
    'Last' =>"varchar(50)",
    'First' =>"varchar(50)",
    'Age'=>"varchar(50)"

]);

if($db->isTable("members")){
    echo "테이블이 존재합니다.";
}else{
    echo "테이블이 없어요";



}
/*
//mtsql 접속
$connect =new mysqli($host,$user,$passwd,$database);
//성공 : connect_errno = 0 ..!1
//실패 : connect_errno = 1 ..!0

if(!$connect ->connect_errno){//->내부에 진입 ,connect_errno->프로포티 변수값
    echo "DB 접속 성공이에요";//에러값이 있으면 성공 안나옴
}else{
    echo"접속이 안돼요";
}
//35~38쪽
$query ="
CREATE TABLE `members`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `LastName` varchar(255),
    `FirstName` varchar(255),
    PRIMARY KEY(`id`)
    )ENGINE = innodb default charset=utf8;
    ";

    if(mysqli_query($connect,$query)){
        echo "테이블 생성 성공";
    }else {
        print "테이블 못 만들었어요.";
    }

//mysqli_connect($connect);
*/