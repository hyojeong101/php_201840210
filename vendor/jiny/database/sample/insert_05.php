<?php
require "../../../../vendor/autoload.php";

// DB를 초기화 합니다.
$dbinfo = \Jiny\Database\db_conf("dbconf.php");
$db = \Jiny\Database\db_init($dbinfo);
if ($db) {
    echo "db 접속 성공\n";
} else {
    echo "db 접속 실패\n";
}

/**
 * 데이터를 삽입합니다.
 */

$builder = $db->table("board5");

// 배열 데이터를 작성합니다.
$titleText1 = "첫번째 입력.";
$titleText2 = "두번째 입력.";
$data = [
    ['regdate' => "aaaa",
    'title' => htmlspecialchars(strip_tags($titleText1))],
    ['regdate' => "bbb",
    'title' => htmlspecialchars(strip_tags($titleText2))]
];

// 테이터를 삽입합니다.
$query = $builder->insert($data)->getQuery();
echo $query;

$builder->run($data);
