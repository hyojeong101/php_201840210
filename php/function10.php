<?php


include "function11.php"; // 함수를 선언한다.
include "function11.php"; // 함수 중복처리 한다.
list($name,$num) = daelim("대림이",201840210);
//$name <--- $name[0]
//$num <--- $name[1]
//print_r($name);
echo $name . "=" . $num;