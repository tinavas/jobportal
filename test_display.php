
<?php
session_start();
include("include/connection.php");
include("function/dbMySql.php"); 

if(isset($_REQUEST['category'],$_REQUEST['subcategory'],$_REQUEST['difficulty_level'])){

$category= $_REQUEST['category'];
$_SESSION['category']=$category;
$subcategory =$_REQUEST['subcategory'];
$_SESSION['subcategory']=$subcategory;
$difficulty_level=$_REQUEST['difficulty_level'];
$_SESSION['difficulty_level']=$difficulty_level;
}

//echo $_Session['category'];

 echo $category=$_SESSION['category'];
 echo $subcategory=$_SESSION['subcategory'];
 echo  $difficulty_level=$_SESSION['difficulty_level'];

$offset_result = mysql_query( " SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM `question` WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory' ");
//echo '<pre>';
//print_r($offset_result);   //RESOURCE ID 6
$offset_row = mysql_fetch_object( $offset_result ); 
//print_r($offset_row);      //stdClass Object ( [offset] => 2 )
$offset = $offset_row->offset;


function selectques($category,$subcategory,$difficulty_level,$offset)
 {
    if($offset>3)
{
  $result = mysql_query(" SELECT `question` AS question , `ans1` AS ans1, `ans2` AS ans2, `ans3` AS ans2, `ans4` AS ans4,`correct_ans` AS correct_ans FROM `question` 
    WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory'");
  $num_rows = mysql_num_rows($result); 

  $lacking= 4-($num_rows-$offset);
  $offset= $offset-$lacking;
  $offset=$offset-1;
}

   $res= mysql_query( " SELECT `question` AS question , `ans1` AS ans1, `ans2` AS ans2, `ans3` AS ans2, `ans4` AS ans4,`correct_ans` AS correct_ans FROM `question`   
    WHERE cat_id = '$category'
    AND difficulty_level= '$difficulty_level'
    AND subcat_id = '$subcategory' LIMIT $offset, 5");
   //echo $r;
     
   //die();
   return $res;
 }


$submit='';
$rs=selectques($category,$subcategory,$difficulty_level,$offset); 

//taking the questions.

//echo '<pre>';
//print_r($rs);

//echo mysql_num_rows($rs);

/*$j=0;
while($rs=selectques($category,$subcategory,$difficulty_level,$offset))
{
  $arra[$j]=$rs;
  $j++;
}
echo '<pre>';
print_r($arra);
*/

if(!isset($_SESSION['qn']))
{
  $_SESSION['qn']=0;
  mysql_query("delete from useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
  $_SESSION['trueans']=0;
  
}

else

{ 
    if($submit=='Next Question' && isset($ans))
    {                         
        $row= mysql_fetch_row($rs);
                               
        mysql_query("insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', '$row[2]','$row[3]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]','$ans')") or die(mysql_error());
        if($ans==$row[8])
        {
              $_SESSION['trueans']=$_SESSION['trueans']+1;
        }
        $_SESSION['qn']=$_SESSION['qn']+1;
    }
    else if($submit=='Get Result' && isset($ans))
    {
        mysql_data_seek($rs,$_SESSION['qn']);                      
        $row= mysql_fetch_row($rs);


        mysql_query("insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."','$row[0]' ,'$row[3]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]','$ans')") or die(mysql_error());
        if($ans==$row[8])
        {
              $_SESSION['trueans']=$_SESSION['trueans']+1;
        }
        echo "<h1 class=head1> Result</h1>";
        $_SESSION['qn']=$_SESSION['qn']+1;
        ?>

        "<Table align=center><tr class=tot><td>Total Question<td> <?php echo $_SESSION['qn'];  
        echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
        $w=$_SESSION['qn']-$_SESSION['trueans'];
        echo "<tr class=fans><td>Wrong Answer<td> ". $w;
        echo "</table>";
        //mysql_query("insert into user_result(login,test_id,test_date,score) values('$login','$row[0]','".date("d/m/Y")."',$_SESSION['trueans'])") or die(mysql_error());
        echo "<h1 align=center><a href=reviewtest.php> Review Question</a> </h1>";
        unset($_SESSION['qn']);
        unset($_SESSION['sid']);
        unset($_SESSION['tid']);
        unset($_SESSION['trueans']);
        exit;
        }
}

$rs=selectques($category,$subcategory,$difficulty_level,$offset) or die(mysql_error()); 

//echo'<pre>';
//print_r($_SESSION);

//die();
echo'<pre>';


if($_SESSION['qn'] > mysql_num_rows($rs)-1)
{
unset($_SESSION['qn']);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=test_display.php> Start Again</a>";

exit;
}

mysql_data_seek($rs,$_SESSION['qn']);
 
$row= mysql_fetch_row($rs);
echo '<pre>';
print_r($row);
       
echo "<div class='login_page2'>";
echo " <div class='login_container'>";
echo "<form name=myfm method=post action=test_display.php?category=" . $category ."&&subcategory=".$subcategory."&&difficulty_level=".$difficulty_level.">";
echo "<table width=100%> <tr> <td width=>&nbsp;<td> <table border=0>";
$n=$_SESSION['qn']+1;
echo "Que ".  $n  .": $row[0]";
echo "<input type=radio name=ans value=1>$row[1]";
echo "<input type=radio name=ans value=2>$row[2]";
echo "<input type=radio name=ans value=3>$row[3]";
echo "<input type=radio name=ans value=4>$row[4]";
echo "</div>";
echo "</div>";
if($_SESSION['qn']<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</body>
</html>
