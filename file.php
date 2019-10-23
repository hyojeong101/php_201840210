<?php
echo"파일 목록을 출력합니다.";

$path = "./";//전역변수
files($path);//전역변수

function files($path) //지역변수
{
    $files = scandir($path); //지역변수
//print_r($files);
for($i=0;$i<count($files);$i++){
    if($files[$i]==".git"||$files[$i]==".."){
        continue;
    }
    if(is_dir($files[$i])){
    echo "<b>".$files[$i]."</b><br>";
    files($path.DIRECTORY_SEPARATOR.$files[$i]);
    }else{
        echo $files[$i]."<br>";
    }
}
}