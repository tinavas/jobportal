<?php
include("include/connection.php");
/////////////////// **** this code is used for delete ****///////////////////////
if(@$_REQUEST['action']=="delete")
{
	if(mysql_query("delete from question where question_id=".$_REQUEST['ban_id']))
	{	?><script type="text/javascript">
		alert("Deleted Successfully");
		window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
		</script><?php
	}
	else
	{	?><script type="text/javascript">
		alert("Error! Data Not Deleted");
		window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
		</script><?php
	}
}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Job Portal</title>
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

        <!-- page specific stylesheets -->

            <!-- footable -->
            <link href="assets/lib/footable/css/footable.core.min.css" rel="stylesheet" media="screen">
        
        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">

        <!-- moment.js (date library) -->
        <script src="assets/js/moment-with-langs.min.js"></script>

    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
             <?php include("include/header.php");?>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    
					<li><a href="add_test.php"><span style="margin-right:300px;">Add Question</span></a></li>
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-10">
                            <!--div class="row">
                                <div class="col-md-3">
                                    <input id="textFilter" type="text" class="form-control input-sm">
                                    <span class="help-block">Filter</span>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control input-sm" id="userStatus">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="disabled">Disabled</option>
                                        <option value="suspended">Suspended</option>
                                    </select>
                                    <span class="help-block">Status</span>
                                </div>
                                <div class="col-md-3">
                                    <a class="btn btn-default btn-sm" id="clearFilters">Clear</a>
                                </div>
                            </div!-->
                            <div class="row">
                                <div class="col-md-90">
                                    <table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="5">
                                        <thead>
                                            <tr>
                                                <th data-toggle="true">Question Id</th>
                                                <th>Category Name</th>
                                                <th>Subcategory Name</th>
                                                <th>Question</th>
                                                <th>Correct Answer</th>
                                                 <th> Difficulty Level </th>

                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										include("include/connection.php");
										include("function/dbMySql.php");
											$con = new DB_con();
											$resquestion=$con->selectquestion();

											while($rowquestion=mysql_fetch_array($resquestion))
											{ 
											
										?>
                                            <tr>
                                                <td><?php echo $rowquestion['question_id']; ?></td>
                                                <td><?php echo $rowquestion['1']; ?></td>
                                                <td><?php echo $rowquestion['2']; ?></td>
                                                <td><?php echo $rowquestion['3']; ?></td>
                                                <td><?php echo $rowquestion['8']; ?></td>
                                                <td><?php echo $rowquestion['difficulty_level']; ?></td>

                                                <!--<td> echo $rowquestion[//'10']; </td> -->  
                                                <td><!--span class="label label-success status-active" title="Active">Active</span!-->
                                                <?php
												 $s=$rowquestion['4']; //originally 11
												if($s=='1')
												{
													?>
                                                     <a href="status1.php?id=<?php echo $rowquestion['0']; ?>"  class="label label-success status-active">Active</a>
                                                    <?php
												}
												else
												{
													?>
                                                     <a href="status.php?id=<?php echo $rowquestion['0']; ?>"  class="label label-success status-deactive">Deactive</a>
                                                <?php
												}
												?>
                                               ||
                                                <a href="edit_test.php?id=<?php echo $rowquestion['0']; ?>"  class="label label-success status-active">Edit</a> || <a href="<?php echo $_SESSION['PHP_SELF'];?>?action=delete&ban_id=<?php echo $rowquestion['0']; ?>"  class="label label-success status-active">Delete</a></td>
                                            </tr>
                                           <?php
										 }
											?>
                                        </tbody>
                                        <tfoot class="hide-if-no-paging">
                                            <tr>
                                                <td colspan="5">
                                                    <ul class="pagination pagination-sm"></ul>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- main menu -->
             <?php include("include/left_menu.php");?>

        </div>

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

	    <!-- page specific plugins -->

            <!-- footable -->
            <script src="assets/lib/footable/footable.min.js"></script>
            <script src="assets/lib/footable/footable.paginate.min.js"></script>
            <script src="assets/lib/footable/footable.filter.min.js"></script>

            <script>
                $(function() {
                    // footable
                    yukon_footable.p_plugins_tables_footable();
                })
            </script>
        
        <!-- style switcher -->
      
    </body>


</html>
