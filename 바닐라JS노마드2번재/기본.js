alert('1.Im working.');
// 경고창



const a = 220;
b = a - 6;
// a = 5 
/* <let으로 하면 오류가 나지않음. 
의도치않은 변경을 막기위해 const를 쓴다. */



console.log('2.Im JS');
console.log(b, a, b);
console.log(b);
//let으로 하면 a값이 변경됨.
//b값은 a값이 변경되기전값만 적용됨.



//const what = lala 
/* lala라는 변수를 컴퓨터가 찾음. 
없으니 에러가 뜰거임. 
그러니 문자열은 ""나 ''안에 넣어주어야 설정이됨.*/
const what = "3.lala";
console.log(what);



const weekDay = ["4.mon", "tue", "wed", "thu", "fri"];
console.log(weekDay[0]);
//[ ]안에 숫자가 몇번째 값을 불러올것인지. 없으면 전체를 표시해줌.
//어레이array 배열



const lalaLee = {
    name:"5.sangjin", 
    age: 28, 
    gender:"female", 
    favMovies: ["along the gods",  "LOTR"],
//favMovies 배열을 객체안에 넣을수 있음.
    favFood: [
        {
            name:"Kimch", 
            fatty: false
        }, 
        {
            name:"hamburger", 
            fatty: true
        }]
//favFood 객체를 배열에 넣어 객체로 다시 관리가능.
}
console.log(lalaLee.name);
//{}안에 키와값을 지정해줄수있음. .키로 불러오기
//오브젝트object 객체
lalaLee.gender = "male";
console.log(lalaLee.gender);
//객체안의 값은 변경이 가능함. 
//변수(lalaLee)는 변경불가능. 
//, ;빼먹으면 오류남
//자바스크립트가 엉망이어도 html, css는 문제없이 잘나옴.



function sayHello(Name, age) 
//함수를 정의하는 문법
{
    console.log('6.Hello',Name, 'you are',age, 'years old');
    console.log("Hello"+Name+ "you are"+age, "years old");
    console.log(`Hello ${Name} you are ${age} years old`);
}
// sayHello("Liyn",15);
//()안에 인자.argaument를 넣어주면 함수가 memberName을 사용할거라는뜻.
    const greetLala = sayHello("lalaLee", 27);
    console.log(greetLala);
//위에서 리턴.반환하지않았기때문에 greetLala값이 undefined



function sayHi(Name, age) {
    return `7.Hello ${Name} you are ${age} years old`
}
const greetLex = sayHi("lexlee", 15);
console.log(greetLex);
//리턴값으로 입력해주면 반환되어 greetLex값이 나옴.

const calculator = {
    plus : function(a, b){
        return a + b;
    }
}
const plus = calculator.plus(5, 5);
console.log(plus);


