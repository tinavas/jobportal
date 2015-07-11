<?php session_start();
include_once "connect.php";
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
 mysql_select_db(DB_NAME);
 $s=$_POST['svalue'];
 $id=$_POST['rid'];
$query="update recommend set status='".$s."'where jobid='".$_SESSION['jobid']."' and ID='".$id."'";
$data=mysql_query($query,$dbc) or die(mysql_error());
echo "Updated";
?>