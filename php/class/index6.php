<?php
class aaa
{
    use abcd;
}
//trait 혼자 객체를 만들수 없다.
trait abcd
{
    public function join()
    {
        echo "나도 끼워줘....";
    }
}

$obj = new aaa;
$obj->join();