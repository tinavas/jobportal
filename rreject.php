<?php session_start();?>
<html>
<head>
 <title>Employer Dashboard</title>
 <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
 <link type="text/css" rel="stylesheet" href="css/dashstyle.css" />

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="employerprofile.php">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="editemployerprofile.php">Edit</a></li>
        <li><a href="postjob.php">Post Job</a></li>
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
session_start();
 // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE[''])) {
      $_SESSION['employerid'] = $_COOKIE['employerid'];
      $_SESSION['co_email'] = $_COOKIE['co_email'];
    }
  }       
require_once('connect.php');
if (!isset($_SESSION['employerid'])) {
    echo '<p class="login">Please <a href="employerstart.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '. <a href="logoutemployer.php">Log out</a>.</p>');
  }
  // Connect to the database
 $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
 mysql_select_db(DB_NAME);
  if (!isset($_GET['employerid'])) {
    $query = "SELECT jobid,job_title,job_description,opening,industry,postdate,deadline FROM job WHERE employerid = '" . $_SESSION['employerid'] . "' and jobid='".$_GET['jobid']."'";
  }
  else {
    $query = "SELECT jobid,job_title,job_description,opening FROM job WHERE employerid = '" . $_GET['employerid'] . "'";
  }
//echo $query;
$data = mysql_query($query,$dbc) or die(mysql_error());
//echo $data;
$numrows=mysql_num_rows($data);
//echo $numrows;
?>
<a href="recommendations.php?jobid=<?php echo $_GET['jobid'];?>" title="All Recommendations">All Recommendations</a>
<a href="rpending.php?jobid=<?php echo $_GET['jobid'];?>" title="Pending">Pending</a>
<a href="rselect.php?jobid=<?php echo $_GET['jobid'];?>" title="Selected candidates">Selected</a>
<a href="rshortlist.php?jobid=<?php echo $_GET['jobid'];?>" title="Shortlisted candidates">Shortlisted</a>
<a href="rreject.php?jobid=<?php echo $_GET['jobid'];?>" title="Rejected candidates">Rejected</a>
<?php
echo "<center><div>";
echo '<h1>This Job :';
while($row=mysql_fetch_array($data)) {
    // The user row was found so display the user data
    if (!empty($row['job_title'])) {
	echo $row['job_title'] . '</h1>&nbsp;<br/>';
    }
    if (!empty($row['job_description'])) {
      echo 'Job Role	:	'.$row['job_description'] . '&nbsp;<br/>';
    }
    if (!empty($row['opening'])) {
      echo 'Number of openings	:	'.$row['opening'] . '&nbsp;<br/>';
    }
}
echo '</div></center>';
?>
<div class="rightpanel">
<div class="pageheader">
<div class="pageicon"><span class="iconfa-laptop"></span></div>
<div class="pagetitle">
            </div>
        </div><!--pageheader-->
        
    <div class="maincontent">
    <div class="maincontentinner">
    <div class="row-fluid">           
    <div style="text-align:center; padding-left:30px;" >
    
<?php 
$q="select * from recommend,register_emp where recommend.ID=register_emp.ID and recommend.jobid='".$_GET['jobid']."' and status='rejected' ORDER BY register_emp.expyear desc";
$data=mysql_query($q,$dbc) or die(mysql_error());
$recc=mysql_num_rows($data);
echo '<center>Number of Rejected Candidates	:	'.$recc.'</center>';
while($row=mysql_fetch_array($data)) 
{
?>
	<div class="entry">
	<?php
	echo '<img float="left" src="images/1.jpg" width="100" height="100"} />';?>
    <div style="float:left;">
	<?php echo $row['firstname'].'&nbsp;'.$row['lastname'].'<br/>'.$row['email'].'<br/>'.$row['phone'];?>
<form>
<select class="rstatus">
<?php if($row['status']=="pending")	{	?>
<option class="<?php echo $row['ID']; ?>" value="pending" <?php if($row['status']=="pending") echo "selected";?>>Pending</option>
<option class="<?php echo $row['ID']; ?>" value="selected" <?php if($row['status']=="selected") echo "selected";?>>Select</option>
<option class="<?php echo $row['ID']; ?>" value="shortlisted" <?php if($row['status']=="shortlisted") echo "selected";?>>Shortlist</option>
<option class="<?php echo $row['ID']; ?>" value="rejected" <?php if($row['status']=="rejected") echo "selected";?>>Reject</option>
<?php	}	else	{	?>
<option class="<?php echo $row['ID']; ?>" value="selected" <?php if($row['status']=="selected") echo "selected";?>>Select</option>
<option class="<?php echo $row['ID']; ?>" value="shortlisted" <?php if($row['status']=="shortlisted") echo "selected";?>>Shortlist</option>
<option class="<?php echo $row['ID']; ?>" value="rejected" <?php if($row['status']=="rejected") echo "selected";?>>Reject</option>
<?php	}	?>
</select>
</form>
	</div>
         </div>
<?php } ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$( '.rstatus' ).change(function(){
var sval=$(this).val();
var hrid=$(this).children().attr('class');
//alert(sval+hrid);
		$.ajax({
		type:'POST',
		url:'status.php',
		data:{'svalue':sval,'rid':hrid},
		
		success: function(b){alert(b);}
		});
	/*alert( "Handler for .change() called." );*/
});
</script>
    </div> 
    </div>
    </div>
    </div>
    </div>
    </body>
    </html>