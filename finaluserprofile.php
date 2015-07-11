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
<?php
  require_once('uploadvars.php');
  require_once('connect.php');
  
    // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['ID'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '</p>');
  }
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
  // Grab the profile data from the database
  if (!isset($_GET['ID'])) {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_SESSION['ID'] . "'";
    
  }
  else {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_GET['ID'] . "'";
  }
  $data = mysql_query($query,$dbc);
 if (mysql_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysql_fetch_array($data);
    
    if($row['no_test']== 0){
       echo "It seems you havent given a test till now! Attempt a <a href='test_credentials.php'>test</a> to increase your chances ";
}

 ?>
<html>
<head>
<title>View Profile</title>
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
        <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="userprofile3.html">Edit</a></li>
        <li><a href="test_credentials.php">Fill Details and Begin Test</a></li>
        <li><a href="notifications.php"><div class="notify">Notifications<?php $q=mysql_query("select * from recommend where ID='".$_SESSION['ID']."'",$dbc) or die(mysql_error()); $r=mysql_num_rows($q); echo '('.$r.')';?> </div></a></li>
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

<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Your Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <?php
         //echo '<img src="' . MM_UPLOADPATH . $row['picture'] .
        //'" alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        echo '<img src="uploads/' . $row['picture'] . '"width="160" height="160"alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        ?>
      </div>
    </form>
    </div>
   
    <!-- form column -->
    <!--<div class="col-md-8 col-sm-6 col-xs-12 personal-info">-->
      <h3>Personal info</h3>
      
        <?php
        echo '<table>';
       if (!empty($row['firstname'])) {
      echo '<tr><td>Firstname : </td><td>' . $row['firstname'] . '</td></tr>';
    }
     if (!empty($row['lastname'])) {
      echo '<tr><td>Lastname : </td><td>' . $row['lastname'] . '</td></tr>';
    }
     if (!empty($row['gender'])) {
      echo '<tr><td>Gender:</td><td>';
      if ($row['gender'] == 'M') {
        echo 'Male';
      }
      else if ($row['gender'] == 'F') {
        echo 'Female';
      }
      else {
        echo '';
      }
      echo '</td></tr>';
    }
    if (!empty($row['birthdate'])) {
      if (!isset($_GET['ID']) || ($_SESSION['ID'] == $_GET['ID'])) {
        // Show the user their own birthdate
        echo '<tr><td>Birthdate : </td><td>' . $row['birthdate'] . '</td></tr>';
      }
  }
  if (!empty($row['city'])) {
      echo '<tr><td>Current Location:</td><td>';
      if ($row['city'] == 'Delhi-NCR') {
        echo 'Delhi-NCR';
      }
      else if ($row['city'] == 'Mumbai') {
        echo 'Mumbai';
      }
      else if($row['city'] == 'Chennai') {
        echo 'Chennai';
      }
      else if($row['city'] == 'Kolkata') {
        echo 'Kolkata';
      }
      else if($row['city'] == 'Hyderabad') {
        echo 'Hyderabad';
      }
      else if($row['city'] == 'Pune') {
        echo 'Pune';
      }
      echo '</td></tr>';
    }
     if (!empty($row['expyear']) && !empty($row['expmonth'])) {
      echo '<tr><td>Experience : </td><td>' . $row['expyear'] .' years '.$row['expmonth'] .' months</td></tr>';
    }
    if (!empty($row['category'])) {
      echo '<tr><td>Skills Category : </td><td>' . $row['category'] .'</td></tr>';
    }
    if (!empty($row['subcategory'])) {
      echo '<tr><td>Skills Sub-Category : </td><td>' . $row['subcategory'] .'</td></tr>';
    }
     if (!empty($row['subsubcategory'])) {
      echo '<tr><td>Skills subsubcategory : </td><td>' . $row['subsubcategory'] .' </td></tr>';
    }
    if (!empty($row['prevjobs'])) {
      echo '<tr><td>Professional Experience : </td><td>' . $row['prevjobs'] .' </td></tr>';
    }
    if (!empty($row['certification'])) {
      echo '<tr><td>Certification : </td><td>' . $row['certification'] .' </td></tr>';
    }
}
  echo '</table>';
      ?> 
     
        <div>
            <input class="btn btn-primary" value="Edit Profile" type="button" name="button" onClick="window.location.href='userprofile3.html'">
        </div>
      
    <!--</div>-->
  </div>
</div>
</body>

</html>