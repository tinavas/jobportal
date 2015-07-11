
<?php
session_start();
include("include/connection.php");
include("function/dbMySql.php"); 

if(isset($_REQUEST['category']))
{
$category= $_REQUEST['category'];
$_SESSION['category']=$category;
$subcategory =$_REQUEST['subcategory'];
$_SESSION['subcategory']=$subcategory;
$difficulty_level=$_REQUEST['difficulty_level'];
$_SESSION['difficulty_level']=$difficulty_level;
}


  $category=$_SESSION['category'];
  $subcategory=$_SESSION['subcategory'];
  $difficulty_level=$_SESSION['difficulty_level'];

//generates random

$offset_result = mysql_query( " SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM `question` WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory' ");
//echo '<pre>';
//print_r($offset_result);   //RESOURCE ID 6
$offset_row = mysql_fetch_object( $offset_result ); 
$offset=0;
//print_r($offset_row);      //stdClass Object ( [offset] => 2 )
//$offset = $offset_row->offset;
//echo $offset_row->offset; //2

//logic for controlling value of offset if it goes greater than 3, because we have to select 4 ques at minimum
$offset=3;

if($offset>=3)
{
  $result = mysql_query(" SELECT `question` AS question , `ans1` AS ans1, `ans2` AS ans2, `ans3` AS ans2, `ans4` AS ans4,`correct_ans` AS correct_ans FROM `question` 
    WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory'");
  $num_rows = mysql_num_rows($result); 

//echo $num_rows;
  
  $lacking= 4-($num_rows-$offset);
  $offset= $offset-$lacking;
  $offset=$offset-1;
}
//echo $offset;
//fetch row block
$result1 = mysql_query( " SELECT `question` AS question , `ans1` AS ans1, `ans2` AS ans2, `ans3` AS ans2, `ans4` AS ans4,`correct_ans` AS correct_ans FROM `question`   
    WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory' LIMIT $offset, 5");//i guess it doesn't take the upper limit 

$fetchcorrectanswers= mysql_query("SELECT `correct_ans` AS correct_ans FROM `question`   
    WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory' LIMIT $offset, 5");
  
 $fetchquestions= mysql_query("SELECT `question` FROM `question` WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory' LIMIT $offset, 5");


$row = mysql_fetch_row($result1);
$row1 = mysql_fetch_row($fetchcorrectanswers);
$row2= mysql_fetch_assoc($fetchquestions);

$totalquestion=sizeof($row);

//echo $totalquestion;

//the while experiment to fill a 2D array with ques and answers
$m=0;

$GLOBALS['flag']=0;

while(($row=mysql_fetch_row($result1))&& ($GLOBALS['flag']==0)) 
{ 
  $arrayques [$m]=$row;
  $m++;
}

$_SESSION['arrayques']=$arrayques;
//echo '<pre>';
//print_r($_SESSION['arrayques']);
$questionarraysize = sizeof($arrayques);
$_SESSION['questionarraysize']=$questionarraysize;
//echo $_SESSION['questionarraysize'];


$n=0;

while($row1 = mysql_fetch_assoc($fetchcorrectanswers))
{
  $arrayans[$n]=$row1['correct_ans'];
  $n++;
}
$_SESSION['arrayans']=$arrayans;
//echo '<pre>';
//print_r($_SESSION['arrayans']);

//echo htmlentities (print_r (json_decode ($json), true));

$q=0;

while($row2 = mysql_fetch_assoc($fetchquestions))
{
  $arrayquestions[$q]=$row2['question'];
  $q++;
}
$_SESSION['arrayquestions']=$arrayquestions;



include("header.php");
?>

<html>
<head>
<link href="../ims/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
</head>
<div class="form-group" align="center" style=" width:100%;margin-top:160px; border-color:#999; border-width:0.1em; border-style:solid">
<form action="start_test.php" method="POST">
<input type="submit" class="btn " style="margin-top:40px;" name="continue" value="CONTINUE TEST">
</form>

<form action="test_credentials.php" method="POST">
<input type="submit" class="btn" style="margin-top:60px;margin-bottom:40px" name="end" value="EXIT TEST">
</form>
</div>
</hmtl>

