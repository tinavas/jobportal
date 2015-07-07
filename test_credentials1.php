<?php
session_start();
include("include/connection.php");
include("function/dbMySql.php");
if(isset($_POST['submit1']))
{
   
    $category=$_POST['category'];
    $category   = mysql_real_escape_string($category);
    $subcategory=$_POST['subcategory'];
    $subcategory   = mysql_real_escape_string($subcategory);
    $difficulty_level=$_POST['difficulty_level'];
    $difficulty_level   = mysql_real_escape_string($difficulty_level);
    
    header("Location: test_display.php?category=".$category."&subcategory=".$subcategory."&difficulty_level=".$difficulty_level);
    $sql_add= "INSERT INTO test (`category`,`subcategory`,`difficulty_level`) VALUES ('$category', '$subcategory', '$difficulty_level')";
    $result=mysql_query($sql_add);
    ?>

    <script type="text/javascript">
    //alert('hiiii');  
    window.location.href="test_credentials.php?category=<?php echo $category ?>&&subcategory=<?php echo $subcategory ?>&&difficulty_level=<?php echo $difficulty_level ?>";
    </script>

<script type="text/javascript">
function showUser123(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser1.php?q="+str,true);
xmlhttp.send();
}
</script>

<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Job Portal</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- bootstrap framework -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!-- google webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- main stylesheet -->
    <link href="assets/css/main.min.css" rel="stylesheet" media="screen">

    </head>
    <body class="login_page2">

        <div class="login_container">
            <form id="login_form" action="test_credentials.php" method="post" class="form-horizontal">
                <h2 class="heading_a"><span class="heading_text">Select Type/level of Test</span></h2>
                <div class="form-group">
                    <label for="login_username" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                        <select required name="category_name" id="category_name" class="form-control" style="margin-left:px;"onChange="showUser123(this.value)" >
                                      <option value="">--Select Category--</option>
                                    <?php $role_sql=$con->select12();?>
                            <?php while($role_val=mysql_fetch_array($role_sql)){ ?>
                                    <option value="<?php echo $role_val['category_name'];?>"><?php echo $role_val['category_name'];?></option>
                                    <?php }?>
                                   </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="login_username" class="col-sm-3 control-label">Sub-Category</label>
                    <div class="col-sm-9">
                         <select name="subcat_name" id="txtHint" class="form-control">
              
                 </select>
                    </div>
                </div>
                 <div class="form-group">
                                    <label for="profile_username" class="col-sm-3 control-label">Difficulty Level</label>
                                    <div class="col-sm-9">
                                         <select required name="difficulty_level" class="form-control">
                                        <option value="0">Select Difficulty Level</option>
                                        <option value="1">Level 1</option>
                                        <option value="2">Level 2</option>
                                        <option value="3">Level 3</option>
                                        </select>
                                    </div>
                                </div>
                <div class="form-group sepH_c">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="submit" value="Start Test" class="btn btn-sm btn-primary" />
                    </div>
                </div>
               
                
            </form>
        </div>
    </body>
</html>


<?php
}
?>

<html>
<body>
<form action="test_display.php" method="POST">
<select name="category">

<?php   
            $sql= "SELECT DISTINCT `category_name`,
                    `category_id` 
            FROM `category`";
        $result=mysql_query($sql) or die;
         while ($row=mysql_fetch_array($result)) 
          { echo $row['category_name'];
            
?>               
      <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name']; ?></option>
<?php               }
    ?>

  </select>
  <br>
  <br>
  <br>
  <br>

<select name="subcategory">
<?php
  $sql=     "SELECT DISTINCT `subcat_name` 
              FROM `subcategory`";
  
        $result=mysql_query($sql) or die;
         while ($row=mysql_fetch_array($result))
          { echo $row['subcat_name'];
?>
                       <option value="<?php echo $row['subcat_name'];?> "><?php echo $row['subcat_name']; ?></option>
<?php               }
    ?>
</select>
  <br>
  <br>
  <br>
  <br>

<select name="difficulty_level">
<?php
 $sql= "SELECT DISTINCT `difficulty_level` 
        FROM `question`";
$result=mysql_query($sql) or die;
         while ($row=mysql_fetch_array($result))
          { echo $row['difficulty_level'];
            
?>
                       <option value="<?php echo $row['difficulty_level'];?>"><?php echo $row['difficulty_level']; ?></option>
<?php               }
    ?>
</select>

  <br>
  <br>
  <br>
  <br>

<br> <input  type="submit" name="submit1" value="SUBMIT"> <br>

</form>



</body>
</html>