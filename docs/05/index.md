# 수업 2019.09.25
수업내용 정리

화면 캡쳐
![img](./images05/1.png)<br>
<br> /n 줄 바꾸기 <br>

![img](./images05/2.png)<br>
Php 폴더에서 열기<br>

Cd .. 으로 전 폴더로 간 다음, 학번 폴더에서 열기<br>
![img](./images05/3.png)<br>
165쪽 오류연산자<br>

php 는 오류제어연산자 @를 지원합니다.<br>
오류 제어 연산자를 코드 앞에 붙여서 사용하면 발생된 오류 메시지를 무시하게 됩니다<br>

![img](./images05/4.png)<br>
-하위 디렉터리-<br>
./ 파일명 : 현재의 디렉터리의 파일명<br>
./폴더1/파일명 : 현재의 디렉터리의 하부 폴더 1의 파일<br>
-상위 디렉터리-<br>
../파일명: 현재 디렉터리 상위 폴더의 파일명<br>

![img](./images05/5.png)<br>
Require 실행중단,  파일이 없으면 중단된다.<br>

Include로 하면 오류는 뜨고 실행,<br>
Require로 하면 오류도 뜨고 실행도 안된다.<br>

![img](./images05/6.png) <br>
275쪽~<br>

Inclue – php 에서 전처리 명령 inclue를 통해 소스 파일을 삽입하면 전처리기 명령을 선언한 소스 그 자리 안에 지정한 파일의 소스가 삽입(277쪽)<br>

Require – 좀 더 유연한 소스 결합과 엄격한 소스 결합을 구분하기 위함(286쪽)<br>


![img](./images05/7.png) <br>
Require 된 파일에 없어서 오류가 난다.<br>

![img](./images05/999.png) <br>
279쪽 <br>

Hello 폴더에 hello12를 넣었을 때<br>
./폴더이름/보고싶은 폴더이름<br>
-하위 디렉터리-<br>
./ 파일명 : 현재의 디렉터리의 파일명<br>
./폴더1/파일명 : 현재의 디렉터리의 하부 폴더 1의 파일<br>
-상위 디렉터리-<br>
../파일명: 현재 디렉터리 상위 폴더의 파일명<br>
![img](./images05/8.png)<br>
Php201840210 에  hell10파일을 넣었을 때<br>
![img](./images05/9999.png)<br>
함수명으로는 가능한 숫자로 시작하는 거는 안된다.<br>
(함수 이름 가능한게 무엇이고 불가능하게 무엇인지 찾아보기)<br>

39쪽<br>
Tab 으로 들여쓰기<br>
![img](./images05/9.png)<br>
![img](./images05/10.png)<br>
Return 함수 값 하나만 출력<br>

Return 키워드 다음에 반환할 값 또는 변수 적기<br>
![img](./images05/11.png)<br>
![img](./images05/12.png)<br>
파란책 23쪽 배열만드는법  / 24쪽 list  함수<br>
![img](./images05/13.png)<br>
Inculde 2번 쓰면 오류<br>
함수명(include)은 두 번 쓰면 오류<br>
![img](./images05/14.png)<br>
Include 명령어는 중복 사용할 경우 여러  문제가 발생하기 때문에 한번만 Include 해야 하는 스크립트가 있으면 Include_once 를 사용한다.<br>

![img](./images05/15.png)<br>
function_exists : 함수가 존재 하는지 존재 하지 않는지 체크 하는 함수<br>
![img](./images05/16.png)<br>
Index 부터 찾아서 index 안치고 class만 쳐도 나온다<br>
![img](./images05/17.png)<br>
![img](./images05/18.png)<br>
new다음에는 클래스 명<br>
![img](./images05/19.png)<br>
![img](./images05/20.png)<br>
![img](./images05/21.png)<br>
![img](./images05/22.png)<br>
![img](./images05/23.png)<br>
![img](./images05/24.png)<br>
![img](./images05/25.png)<br>
345 메소드 체인<br>
![img](./images05/26.png)<br>
![img](./images05/27.png)<br>
![img](./images05/28.png)<br>
![img](./images05/29.png)<br>
result->hello();<br>
$result->greeting<br>
![img](./images05/30.png)<br>
![img](./images05/31.png)<br>
![img](./images05/32.png)<br>
![img](./images05/33.png)<br>
__construct()메서드는 객채 생성 시 초기값 설정을 해주는 특수 메서드 입니다.<br>

![img](./images05/34.png)<br>

![img](./images05/35.png)<br>
![img](./images05/36.png)<br>
접근제한자  3개<br>

플라이빗 -개인적 클래스 내부안에서만 사용////프로텍<br>
![img](./images05/37.png)<br>
Extend 사용해서 클래스 상속하기<br>


![img](./images05/38.png)<br>
![img](./images05/39.png)<br>
덮어쓰기 <br>
오버라이딩<br>
![img](./images05/40.png) <br>
![img](./images05/41.png) <br>
Hello만들어야 하는데 안 만들어 줘서<br>
![img](./images05/41.png) <br>
추상클래스는 상속받는다<br>

![img](./images05/42.png) <br>
![img](./images05/99999.png) <br>

//trait 혼자 객체를 만들수 없다.<br>
뉴 인터페이스 <br>
뉴 추상클래스 혼자 x<br>
다른클래스에 삽입해야함<br>

trait 도 상속된다/.<br>


![img](./images05/43.png) <br>
![img](./images05/44.png) <br>
별칭 너무 길면 use 사용<br>

![img](./images05/45.png) <br>
![img](./images05/46.png) <br>
![img](./images05/47.png) <br>
![img](./images05/48.png) <br>
둘 다 똑같다. 저런게 있다 알기/글로벌은 무조건 대문자<br>
![img](./images05/48.png) <br>



