function hello(n){
  alert("Hello! " + n);
}
var n=prompt("Please enter your name:","");

function age(){
  var dateofbirth = prompt("Enter your year of Birth");
  var todaydate = prompt("Enter current year");
  var currentage = todaydate-dateofbirth;
  alert( "  Hey!!!!  " + n + "  your current age  "  +  currentage );
  }
  hello(n);
  age();
