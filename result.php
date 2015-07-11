<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<?php
include("header.php");
session_start();
if(isset($_SESSION['arrayans'])&&$_SESSION['questionarraysize']){
$a1=$_SESSION['arrayans'];
$a2=array();
$a3=$_SESSION['arrayquestions'];

if(isset($_SESSION['ans'])){$a2=($_SESSION['ans']);};
$v=$_SESSION['questionarraysize'];
echo '<table align="center" style=" text-align:center;margin-top:100px;width:70%;" class="table table-bordered table-hover">';
echo '<th style=" text-align:center;">Your Answer</th>';
echo '<th style=" text-align:center;">Correct Answer</th>';
echo '<th style=" text-align:center;">Result</th>';
$p=0;
for($i=0;$i<$v;$i++)
{
	echo'<tr align="center">';
	
if($a2[$i]!=0){
	if($a1[$i]==$a2[$i]){
	$c[$i]='Correct';
	$p++;
	}
	else{
	$c[$i]='Incorrect';
	}
}
else{
	$c[$i]='Not Attempted';
	}
	
if($a2[$i]!=0){
	echo '<td>'.$a2[$i].'</td>';
}
	else{
	echo '<td>-</td>';
	}
	echo '<td>'.$a1[$i].'</td>';
echo'<td>'.$c[$i].'</td>';
	
echo'</tr>';

}
echo '</table>';
echo '<p align="center">You have '.$p.' correct answers</p>';
if($p<$v/2){
echo '<h3 align="center">You have failed</h3>';
	
	}
	else if($p==$v){
	
		echo '<p align="center">Congratulations Brilliant Performance!!</p>';

	}
	else if($p<$v){
			echo '<p align="center">Congratulations you have performed well!!</p>';

	}
	}
	else{
		header("Location:test_credentials.php");
		}

$implodeda1= implode("| ", $a1);
$implodeda2= implode("| ", $a2);
$implodeda3= implode("| ", $a3);	
$sql_push_answer_array= "INSERT INTO userresult (`questions`,`selectedanswers`,`correctanswers`) VALUES ('$implodeda3', '$implodeda2', '$implodeda1')";

$resultpush=mysql_query($sql_push_answer_array);




?>