<?php
//1단계  선언 , this(인스턴스?)->foo
//self->stactic
class foo
{
    //변수 , 함수
    public $name; // 프로포티
    public static $daelim = "대림대학교";

    public function hello()
    {
        echo self::$daelim.">> ";
        echo $this->name."짱이에요.<br>";
        return $this;
    }
    public function greeting()
    {
        echo "반가워요<br>";
        return $this;
    }
}
//2단계 생성 , new 다음 클래스 이름
$obj1 = new foo;
$obj1->name = "대림이"; // 객체 프로포티 값을 지정
$obj1->hello(); //대림대학교>> 대림이짱이에요.

$obj2 = new foo;
$obj2->name = "대숙이"; // 객체 프로포티 값을 지정
$obj2->hello(); //대림대학교>> 대숙이짱이에요.

foo::$daelim = "우주최강";
$obj1->hello();//우주최강>> 대림이짱이에요.
$obj2->hello();//우주최강>> 대숙이짱이에요.



/*
//3단계 호출 
$result = $obj->hello(); //$this
//$result== $this
$result->hello()->greeting();

echo "====<br>";

$obj2 = new foo;
$obj2->name = "대숙이";
$result = $obj2->hello();


// 1단계 선언
class bar
{
    public static $name; //static 정적변수

    public static function username()
    {
        echo self::$name."입니다.";

    }

} 
bar::$name = "고정값"; //static을 쓰면 -> 대신 ::
bar::username();
*/