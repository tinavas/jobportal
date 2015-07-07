<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
?>
<html>
<head>
<title>View Profile</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
$(document).ready(function(){
$('#btnSubmit').click(function(){
$(".inner").append("<div id='new' class='new'><form><div class='form-group'><label class='control-label'>Institute Name</label><input maxlength='200' type='text' class='form-control'id='institute' name='institute' placeholder='Enter institute Name' /></div><div class='form-group'><label class='control-label'>Degree</label><input maxlength='200' type='text' class='form-control' placeholder='Enter Degree'  /></div><div class='form-group'><label class='control-label'>From</label><input type='month' class='form-control'/><label class='control-label'>To</label><input type='month' class='form-control' /></div><div class='form-group'><label class='control-label'>Course Type</label><select class='form-control' id='coursetype' name='coursetype'><option>Full time</option><option>Part Time</option><option>Distance Learning</option></select></div><input id = 'btnSubmit' type='button' value='Add'/><button  class='delete'>Delete</button></form> </div>");
});
$('#btnRemove').click(function(){
$(".new").remove();
});

});
$(document).ready(function(){
$('#btnSub').click(function(){
$(".outer").append("<div id='new1' class='new1'><form><div class='form-group'><label class='control-label'>Designation</label><input maxlength='200' type='text'  class='form-control' id='designation' name='designation' placeholder='Enter Designation' /></div><div class='form-group'><label class='control-label'>Organization</label><input maxlength='200' type='text' id='org' name='org' class='form-control' placeholder='Enter Degree'  /></div><div class='form-group'><label class='control-label'>From</label><input type='month' id class='form-control'/><label class='control-label'>To</label><input type='month' class='form-control' /></div></form></div>");
});
$('#btnRem').click(function(){
  $(".new1").remove();
});
});
</script>
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
        <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="viewuserprofile.php">Edit</a></li>
        <li><a href="test_credentials1.php">Take Test</a></li>
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
 <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
  <h3>Educational Details</h3>
<form class="form-horizontal" role="form" action="edituserprofile.php" method="post">
  <div id="container1" class="inner">
          <div class="form-group">
            <label class="col-md-4 col-sm-4 control-label">Institute Name</label>
            <div class="col-md-3 col-sm-3 pd10">
            <input maxlength="200" type="text" required="required" class="form-control" id="institute" name="institute" placeholder="Enter institute Name" />
          </div>
        </div>
          <div class="form-group">
            <label class="col-md-4 col-sm-4 control-label">Degree</label>
            <div class="col-md-3 col-sm-3 pd10">
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Degree"  />
          </div>
        </div>
          <div class="form-group">
            <label class="col-md-4 col-sm-4 control-label">Course Type</label>
             <div class="col-md-3 col-sm-3 pd10">          
            <select class="form-control" id="coursetype" name="coursetype">
            <option>Full time</option>
            <option>Part Time</option>
            <option>Distance Learning</option>
            </select>
          </div>
        </div>
           <div class="form-group">
            <label class="col-md-4 col-sm-4 control-label">From</label>
            <div class="col-md-3 col-sm-3 pd10">
            <input type='month' class='form-control' id="from" name="from" />
            <label class="control-label">To</label>
            <input type='month' class='form-control' id="to" name="to" />
          </div>
        </div>
        

 <input id = "btnSubmit" type="button" value="Add"/>
<input id = "btnRemove" type="button" value="Delete"/>
</form>
</div>
</div>
</body>
</html>



