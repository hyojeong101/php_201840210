<?php 
sql_autoload_register(function($className)
{
    //echo $classNamel;
    $filename = $className . ".php";
    //echo $filename;
    if(file_exists($filename)){
        include $filename;
    }
   

});