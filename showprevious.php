<?php

session_start();

$arrayques=$_SESSION['arrayques'];


function showprevious($arrayques)
{
  if($_SESSION['question_counter']>0 && $_SESSION['question_counter']<=$_SESSION['questionarraysize'])

{
  $_SESSION['question_counter']=$_SESSION['question_counter']-1;

  echo '<div id = "question_no" class=" form-group" class = "quest">';
  
  //echo '<form id=myForm>';
  echo'<table class=" table table-bordered table-hover" style="width:60%; float:center; margin-top:100px;" align="center">';
  echo '<th colspan="2">'; echo $arrayques[$_SESSION['question_counter']][0]; echo '</th><tr><td>';
  
  echo $arrayques[$_SESSION['question_counter']][1];
  echo '<input style=" float:left" class="radio" type="radio" id= "check1" name="answer" value= "1"/></td><td>'; 
  echo $arrayques[$_SESSION['question_counter']][2];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check2" name="answer" value= "2"/></td></tr><tr><td>'; 
  echo $arrayques[$_SESSION['question_counter']][3];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check3" name="answer" value= "3"/></td><td>'; 
  echo $arrayques[$_SESSION['question_counter']][4];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check4" name="answer" value= "4"/></td></tr>'; 
 
   echo '</table>';

  echo '</div>';



  
  //echo "sessionquestioncounter"; echo $_SESSION['question_counter'];
}

  else 
  {

 echo '<div id = "question_no" class=" form-group" class = "quest">';
  
  //echo '<form id=myForm>';
  echo'<table class=" table table-bordered table-hover" style="width:60%; float:center; margin-top:100px;" align="center">';
  echo '<th colspan="2">'; echo $arrayques[0][0]; echo '</th><tr><td>';
  
  echo $arrayques[0][1];
  echo '<input style=" float:left" class="radio" type="radio" id= "check1" name="answer" value= "1"/></td><td>'; 
  echo $arrayques[0][2];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check2" name="answer" value= "2"/></td></tr><tr><td>'; 
  echo $arrayques[0][3];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check3" name="answer" value= "3"/></td><td>'; 
  echo $arrayques[0][4];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check4" name="answer" value= "4"/></td></tr>'; 
 
   echo '</table>';

  echo '</div>';

}
}

showprevious($arrayques);

?>