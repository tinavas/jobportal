<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE['co_email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
?>
<html>
<head>
<title>Post Job </title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
        <li><a href="employerdash.php">Dashboard</a></li>
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
        <li><a href="postjob.php">Post Job</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logoutemployer.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav> 
 <?php if (!isset($_SESSION['employerid'])) {
    echo '<p class="login">Please <a href="employerstart.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '. <a href="logoutemployer.php">Log out</a>.</p>');
  }      
 ?>     
<form method="post" action="addjob.php">  
   <div class="container">
	<div class="row">
        <div class="col-sm-12">
            <legend>Post a Job:</legend>
        </div>
        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Post Job Details:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="jobtitle" class="col-sm-3 control-label">Job Title/Designation:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jobtitle" name="jobtitle">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Job Description</label>
                        <div class="col-sm-9">
                            <textarea required="required" class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="opening" class="col-sm-3 control-label">No. of Openings:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="opening" name="opening">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="industry" class="col-sm-3 control-label">Industry Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="industry" name="industry">
                                <option>Insurance</option>
                                <option>Category 1</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="pdate" class="col-sm-3 control-label">Posted Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="pdate" name="pdate">
                        </div>
                    </div>  
                     <div class="form-group">
                        <label for="ddate" class="col-sm-3 control-label">Deadline</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="ddate" name="ddate">
                        </div>
                    </div>
                            
                </div>
            </div>            
        </div>
        <button type="submit" id="submit" name="submit"class="btn btn-default preview-add-button">Post</button>
        </form>                     <!-- / panel preview -->
        <!--<div class="col-sm-7">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table">
                            <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Description</th>
                                    <th>Openings</th>
                                    <th>Status</th>
                                    <th>Post Date</th>
                                    <th>Deadline</th>
                                </tr>
                            </thead>
                            <tbody></tbody> 
                          </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block">Submit all and finish</button>
                </div>                
            </div>-->
        </div>
	</div>
</div>
</body>
</html>