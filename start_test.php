<!-- Author @_@ codemonkey YO! -->

<html>
<head>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js"></script>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();
include("header.php");
?>
   <div id="remain" style="float:right; margin-right:40px;" >
         <?php if(isset($remainingHour)&&isset($remainingMinutes)&&isset($remainingSeconds)){
?><label>Time Remaining:</label><?php echo "$remainingHour hours, $remainingMinutes minutes, $remainingSeconds seconds";}?>
   </div>

<?php
echo '<br/>';
$arrayques=$_SESSION['arrayques'];
$startarrayques=$_SESSION['arrayques'];
$question_counter=0;
$_SESSION['question_counter']=$question_counter;


$_SESSION['arraysizeminusone']=$_SESSION['questionarraysize'];

function shownext($arrayques)
{

  if($_SESSION['arraysizeminusone']==$_SESSION['question_counter'])
  {
  echo "Test finished";
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



 
echo '<input style="margin-left:300px;margin-right:5px" type="submit" id="submitbutton" class="button btn" onClick= "nextques();" name="next1" value="NEXT QUESTION" />';
  echo '<input type="submit" class="button btn" style="margin-right:5px" onClick= "previousques();" name="previous1" value="PREVIOUS QUESTION" />';
  echo '<input type="submit" class="button btn" style="margin-right:5px"  onClick= "skipquestion();" name="skip1" value="SKIP QUESTION" />';
  echo '<input type="submit" class="button btn" style="margin-right:5px"  name="finish1" onclick="func();" value="FINISH AND SEE RESULT" />';
  
  

  //$_SESSION['answerval']=$_GET['radioName'];
  //echo $_SESSION['answerval'];
  
  //echo $_SESSION['question_counter']= $_SESSION['question_counter']+1;

  //echo "sessionquestioncounter"; echo $_SESSION['question_counter'];
  echo "<input type='text' hidden='hidden' id='text1' value='0'/>";  //echo "sessionquestioncounter"; echo $_SESSION['question_counter'];

  }

}
shownext($arrayques);

?>
<?php
date_default_timezone_set('Asia/Kolkata');
if (isset($_SESSION['targetime'])) {
    // session variable_exists, use that
    $targetime = $_SESSION['targetime'];
   
} else {
    // No session variable, read from mysql
   
    $targetime = time();
  $_SESSION['targetime'] = $targetime;
}

$actualtime = time();
$secondsDiff =$actualtime-$targetime;

$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-         ($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-    ($remainingHour*60*60))-($remainingMinutes*60));

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Untitled Document</title>
   <script type="text/javascript"> 
      var hours = <?php echo $remainingHour; ?>  
      var minutes = <?php echo $remainingMinutes; ?>  
      var seconds = <?php echo $remainingSeconds; ?> 
      
    function setCountDown ()
      {
          seconds--;
          if (seconds < 0){
             minutes--;
             seconds = 59
          }
          if (minutes < 0){
              hours--;
              minutes = 59
          }
          if (hours < 0){
              hours = 23
          }
          document.getElementById("remain").innerHTML = "  "+seconds+" sec";
          var SD=window.setTimeout( "setCountDown()", 1000 );
          if (hours=='00'&&minutes == '00' && seconds == '00') { 
              seconds = "00"; window.clearTimeout(SD);
              window.location = "result.php"
          } 

       }
    </script>
 
<script type="text/javascript">
function func(){
  window.location.href="result.php";
  }
var a=[];
var i=0;
$(document).ready(function(e) {
$("#submitbutton").click(function() {

//i was here at 11:40 today

var radioVal=[];
//while()
var radioVal =$('input:radio[name=answer]:checked').val();
//radioVal.push($(this).val());
var x=typeof(radioVal);
if(x=='undefined'){
  a[i]=0;
  i++;
  }
  else{
a[i]=radioVal;
i++;}
  $.ajax({
    
        url: 'ans.php',
        type: 'POST',
    data: {'ans': a},
    success: function(b){
      
      }
    })
});
});

//implemented, getting in array. putting in nextques.php 12:29 + 1:19 yay. ^_^
// @_@ this is codemonkey. YO!
// i did this on 11:58 today     

</script>

<script type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
  var xmlhttp=false; 
  try{
   xmlhttp=new XMLHttpRequest();
  }
  catch(e) {  
   try{   
    xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
   }
   catch(e){
    try{
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e1){
     xmlhttp=false;
    }
   }
  }

  return xmlhttp;
  }

function nextques() 
{  
  document.getElementById("text1").value=Number(document.getElementById("text1").value)+1;
  if((document.getElementById("text1").value)==3){
    document.getElementById("submitbutton").removeAttribute("onclick");
    document.getElementById("submitbutton").setAttribute("onclick","func()");
    }
  var strURL="shownext.php";

  var req = getXMLHTTP(strURL);

  if (req) {
  //alert(req);
  
    req.onreadystatechange = function() {
    
    if (req.readyState == 4) {
     
     if (req.status == 200) {   

      //alert(req.responseText);
      document.getElementById('question_no').innerHTML=req.responseText;  

         
     } else {
      alert("There was a problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
req.open("GET", strURL, true);
   req.send(null);   
  }  
 }

</script>

<script>
function previousques() 
{  
  var strURL="showprevious.php";

  var req = getXMLHTTP(strURL);

  if (req) {
  //alert(req);
  
    req.onreadystatechange = function() {
    
    if (req.readyState == 4) {
     
     if (req.status == 200) {   

      //alert(req.responseText);
      document.getElementById('question_no').innerHTML=req.responseText;  

         
     } else {
      alert("There was a problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
req.open("GET", strURL, true);
   req.send(null);   
  }  
 }

</script>

<script>
function skipquestion() 
{  
  var strURL="skipquestion.php";

  var req = getXMLHTTP(strURL);

  if (req) {
  //alert(req);
  
    req.onreadystatechange = function() {
    
    if (req.readyState == 4) {
     
     if (req.status == 200) {   

      //alert(req.responseText);
      document.getElementById('question_no').innerHTML=req.responseText;  

         
     } else {
      alert("There was a problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
req.open("GET", strURL, true);
   req.send(null);   
  }  
 }

</script>


<!--

      echo "<table>";
     echo "<td>Name</td>";
     echo "<td>".$name."</td>";


     echo '<div class="custom-thumb">'; 
echo '<a href="'; the_permalink(); echo '" title="'; the_title(); echo '">';
$thumb = get_post_thumbnail_id(); 
$img_url = wp_get_attachment_url( $thumb,'full' ); 
$image = aq_resize( $img_url, 500, 175, true ); 
echo '<img src="'.$image.'" width="500" height="175" alt="'; the_title(); echo '"/>';
echo '</a>';
echo '</div>';

-->
</body>
</html>
