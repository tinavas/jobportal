<?php
include("include/connection.php");
include("function/dbMySql.php");

$con = new DB_con();

// data insert code starts here.
if(isset($_POST['submit']))
{
 $cat_id=$_POST['cat_id'];
 $subcat_id=$_POST['subcat_id'];
 $start_date=$_POST['start_date'];
 $end_date=$_POST['end_date'];
 $test_duration=$_POST['test_duration'];
 $create_status='0';;
  
 $con->insertcreatemaster($cat_id,$subcat_id,$start_date,$end_date,$test_duration,$create_status);
 ?>
 <script type="application/javascript">
 window.location="create_qus_master.php";
 </script>
 <?php
 //header("Location: category.php");
}
?>
<!DOCTYPE html>
<html>
    

<head>
		<meta charset="UTF-8">
		<title>Job Protal</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		
        <!-- icon sets -->
            <!-- elegant icons -->
                <link href="assets/icons/elegant/style.css" rel="stylesheet" media="screen">
            <!-- elusive icons -->
                <link href="assets/icons/elusive/css/elusive-webfont.css" rel="stylesheet" media="screen">
            <!-- flags -->
                <link rel="stylesheet" href="assets/icons/flags/flags.css">
            <!-- scrollbar -->
                <link rel="stylesheet" href="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">


        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">

        <!-- moment.js (date library) -->
        <script src="assets/js/moment-with-langs.min.js"></script>
        
        
        <!--Editor-->
<script src="ckeditor/ckeditor.js"></script>



<script src="ckeditor/ckeditor.js"></script>
	
    
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

xmlhttp.open("GET","getuser.php?q="+str,true);

xmlhttp.send();

}

</script>

    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
            <?php include("include/header.php");?>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
		            <li><span>Add Question/Answers Master</span></li>
		           
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" action="" method="post">
                                <h3 class="heading_a"><span class="heading_text">Add Question/Answers Master Information</span></h3>
                               
                               
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="cat_id" class="form-control" onChange="showUser123(this.value)">
                                       <?php 
									   $sql="SELECT * FROM category";
										$result=mysql_query($sql);
										while($row= mysql_fetch_array($result))
										{
									   ?>
                                        <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
                                        <?php
										}
										?>
                                        </select>
                                    </div>
                                </div>
                                
                                
                               <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Subcategory Name</label>
                                    <div class="col-sm-10">
                                        <select name="subcat_id" id="txtHint" class="form-control">
	 						
     						 </select>
                                        
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Start Date</label>
                                    <div class="col-sm-10">
                                    
                                      
                                       <input type="date" name="start_date" value="" placeholder="Start Date" class="form-control">
	 						
     						 </select>
                                        
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">End Date</label>
                                    <div class="col-sm-10">
                                 
                                       <input type="date" name="end_date" value="" placeholder="End Date" class="form-control">
	 						
     						 </select>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="profile_username" class="col-sm-2 control-label">Test Duration</label>
                                    <div class="col-sm-10">
                                  
                                      
                                       <input type="time" name="test_duration" value="" placeholder="Test Duration" class="form-control">
	 						
     						 </select>
                                        
                                    </div>
                                </div>
                                
                               
                                
                             
                                
                               
                               
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        
                                       <input type="submit" name="submit" value="Submit" class="btn-primary btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                </div>
            </div>
            
            <!-- main menu -->
            <?php include("include/left_menu.php");?>

        </div>

            <script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.

			CKEDITOR.replace( 'category_details' );

		</script>

 
 
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- jQuery Cookie -->
        <script src="assets/js/jqueryCookie.min.js"></script>
        <!-- Bootstrap Framework -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- retina images -->
        <script src="assets/js/retina.min.js"></script>
        <!-- switchery -->
        <script src="assets/lib/switchery/dist/switchery.min.js"></script>
        <!-- typeahead -->
        <script src="assets/lib/typeahead/typeahead.bundle.min.js"></script>
        <!-- fastclick -->
        <script src="assets/js/fastclick.min.js"></script>
        <!-- match height -->
        <script src="assets/lib/jquery-match-height/jquery.matchHeight-min.js"></script>
        <!-- scrollbar -->
        <script src="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Yukon Admin functions -->
        <script src="assets/js/yukon_all.js"></script>


        <!-- style switcher -->
        

    </body>


</html>
