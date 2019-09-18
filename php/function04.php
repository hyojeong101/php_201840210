<?php

//선언
function korean()
{
   //함수 내용
   echo "안녕히세요";
}
function english()
{
   //함수 내용
   echo "hello";
}

$lang = "ko";
if($lang == "ko")
     $fff = "korean";

else
 $fff = "english";


//가변함수
$fff();