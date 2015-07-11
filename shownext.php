<?php

session_start();
$arrayques=$_SESSION['arrayques'];
/*
$questionarraysize=$_SESSION['questionarraysize'];
$question_counter=$_SESSION['question_counter'];
*/


//all session variables received, call them directly.

//echo $_POST['answer'];
//echo $answer;


function shownext($arrayques)
{
  //echo '<pre>';
  //print_r($_SESSION['arrayques']);
   
  $_SESSION['question_counter']= $_SESSION['question_counter']+1;
  if($_SESSION['arraysizeminusone']==$_SESSION['question_counter'])
  {
  header("location:result.php");
  
  }

  else

  {

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
  //echo '</form>';
  echo '</div>';



  
  /*echo '<input type="submit" id="submitbutton" class="button" onClick= "nextques();" name="next1" value="NEXT QUESTION" />';
  echo '<input type="submit" class="button" onClick= "previousques();" name="previous1" value="PREVIOUS QUESTION" />';
  echo '<input type="submit" class="button" onClick= "skipquestion();" name="skip1" value="SKIP QUESTION" />';
  echo '<input type="submit" class="button" name="finish1" value="FINISH AND SEE RESULT" />';
*/
  
  //$_SESSION['question_counter']=$_SESSION['question_counter']+1;
  
 // echo "sessionquestioncounter"; echo $_SESSION['question_counter'];
}
}

shownext($arrayques);

?>


<!--<script type="text/javascript">
  var answers=[];

$('input[type=radio]').click(function()
{
    var id = ($(this).parent().attr('id'));
    id = id.slice(4);
    $('#nav'+id).css('color','red');
    answers.push($(this).val());
    alert(answers);

    //implemented, getting in array. putting in nextques.php 12:29S

   $.ajax({
   type: 'POST',
   data: {answers : answers},
   url: 'start_test.php',
   success: function(data) {alert('hi');},
   error: function() {alert('ho');}


});
});




</script>

-->
