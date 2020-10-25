var fname=prompt("enter first name");
var lname=prompt("Enter Last name");
var f=fname.charAt(0);
var l=lname.charAt(0);
var age=prompt("Enter your age");
var height=prompt("Enter Height");
var nickname=prompt("Enter your nickname");
cond1=false;
cond2=false;
cond3=false;
cond4=false;


if(f==l){
    cond1=true;
}
if(age>20 && age<30){
    cond2=true;
}
if(height>170)
{
    cond3=true;
}
if(nickname.charAt(nickname.length-1)=="y"){
    cond4=true;
}
if(cond1==cond2==cond3==cond4){
    console.log("spy");
}