<?php
//디자인 패턴 :객체를 설계하는 형태
//싱글턴 패턴
class Test{
    public function __construct(){
        echo "텍스트 객체";
    }
    public static $Instance;
    public static function make()
    {
        //재사용 = 공유
        //플라이 웨이트 패턴
        //플라이 웨이트 = 배열(다중공유)
        // - 레지스터리 패턴 ,컨테이너 
        if(self::$Instance){
            self::$Instance = new self();
        }
        
        return self::$Instance;
    }
    //팩토리 패턴 - 객체를 생성해주는 역할
    public function factory($name){
        return new $name;
    }
    //전략 패턴  
    public function strange(object $algorism)
    {
        $this-> A = $algorism;
    }
}