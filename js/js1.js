function calculate () {
  var field1=document.getElementById("num1").value;
  var field2=document.getElementById("num2").value;
  var field3=document.getElementById("num3").value;
  var field4=document.getElementById("num4").value;
  var field5=document.getElementById("num5").value;
  

  var result1=parseFloat(field1)+parseFloat(field2);
  var result2=parseFloat(result1)-parseFloat(field3);
  var result3=parseFloat(result2)*parseFloat(field4);
  var result4=parseFloat(result3)/parseFloat(field5);

  if(!isNaN(result1 && result2 && result3 && result4)){
     document.getElementById("answer1").innerHTML="Sum of the first and second numbers: "+ result1;
     document.getElementById("answer2").innerHTML="Difference of the sum ("+result1+") and the third ("+field3+") number is: "+ result2;
     document.getElementById("answer3").innerHTML="The product of the difference ("+result2+") and the fourth number("+field4+") is: "+ result3.toFixed(2);
     document.getElementById("answer4").innerHTML="The quotient of the product ("+result3+") and the fifth number ("+field5+") is: "+ result4.toFixed(2);
  }else{
      alert("Invalid input");
  }  
}