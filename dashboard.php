<?php 
session_start();
include("include/connection.php");
@$id=$_GET['id'];

$row = mysql_query("select * from admin_login where id='$id'");
$row1=mysql_fetch_array($row);
echo $username=$row1['username'];

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


        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">

        <!-- moment.js (date library) -->
        <script src="assets/js/moment-with-langs.min.js"></script>
		
		 <script type="text/javascript" src="img/html2canvas.js"></script>
<script language=JavaScript>
function ieClicked() {
    if (document.all) {
        return false;
    }
}
function firefoxClicked(e) {
    if(document.layers||(document.getElementById&&!document.all)) {
        if (e.which==2||e.which==3) {
            return false;
        }
    }
}
if (document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=firefoxClicked;
}else{
    document.onmouseup=firefoxClicked;
    document.oncontextmenu=ieClicked;
}
document.oncontextmenu=new Function("return false")
function disableselect(e){
    return false
    }
    function reEnable(){
    return true
    }
    document.onselectstart=new Function ("return false")
    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
</script>
    <script>
/*function check(e)
{
alert(e.keyCode);
}*/
document.onkeydown = function(e) {
        if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
            //alert('not allowed');
        }
        return false;
};
</script>

    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
            <?php include("include/header.php");?>

                      <?php $que= mysql_query("select * from register_emp") ;
                      $rowxy = mysql_fetch_array($que);
                     
                      ?>
            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="dashboard.php">Home</a></li>        </ul>
            </nav>           
            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_a">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_group"></span>
                                    <span class="countUpMe" data-endVal="<?php  echo $rowz = mysql_num_rows($que); ?>"><?php  echo $rowz = mysql_num_rows($que); ?></span>
                                </div>
                                <div class="info_box_footer">
                                    Job Seekers
                                </div>
                            </div>
                        </div>
                                              <?php $que= mysql_query("select * from employer") ;
                      $rowxy = mysql_fetch_array($que);
                     
                      ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_b">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_cart_alt"></span>
                                    <span class="countUpMe" data-endVal="<?php  echo $rowz = mysql_num_rows($que); ?>"><?php  echo $rowz = mysql_num_rows($que); ?></span>
                                </div>
                                <div class="info_box_footer">
                                    Employers
                                </div>
                            </div>
                        </div>
                                              <?php $que= mysql_query("select * from category") ;
                      $rowxy = mysql_fetch_array($que);
                     
                      ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_c">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_wallet"></span>
                                    <span class="countUpMe" data-endVal="<?php  echo $rowz = mysql_num_rows($que); ?>"><?php  echo $rowz = mysql_num_rows($que); ?></span>
                                </div>
                                <div class="info_box_footer">
                                    Categories
                                </div>
                            </div>
                        </div>
                        <?php $que= mysql_query("select * from category") ;
                      $rowxy = mysql_fetch_array($que);
                     ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_d">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_mail_alt"></span>
                                    <span class="countUpMe" data-endVal="<?php  echo $rowz = mysql_num_rows($que); ?>"><?php  echo $rowz = mysql_num_rows($que); ?></span>
                                </div>
                                <div class="info_box_footer">
                                    Sub-Categories
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php $que= mysql_query("select * from employer") ;
                      $rowxy = mysql_fetch_array($que);
                     ?>
                    <div class="row row_full mHeight">
                        <div class="col-lg-4">
                            <div class="easy_chart_wrapper mHeight-item">
                                <div class="easy_chart_a easy_chart" data-percent="<?php  echo $rowz = mysql_num_rows($que); ?>">
                                    <span class="easy_chart_percent"></span>
                                </div>
                                <div class="easy_chart_info">
                                    <h4 class="easy_chart_heading">Employers</h4>
                                    <p><a href="#"></a></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        //$que= mysql_query("select * from seeker") ;
                        $que=mysql_query("select * from register_emp");      //Job Seeker table query
                      $rowxy = mysql_fetch_array($que);
                     ?>
                        <div class="col-lg-4">
                            <div class="easy_chart_wrapper mHeight-item">
                                <div class="easy_chart_b easy_chart" data-percent="<?php  echo $rowz = mysql_num_rows($que); ?>">
                                    <span class="easy_chart_percent"><?php  echo $rowz = mysql_num_rows($que); ?></span>
                                </div>

                                <div class="easy_chart_info">
                                    <h4 class="easy_chart_heading">Confirmed registrations</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="easy_chart_wrapper mHeight-item">
                                <div class="easy_chart_c easy_chart" data-percent="72">
                                    <span class="easy_chart_icon icon_chat_alt"></span>
                                </div>
                                <div class="easy_chart_info">
                                    <h4 class="easy_chart_heading">Online Tests</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <!--<div class="row">
                        <div class="col-md-12">
                            <div class="heading_a">
                                <span class="heading_text">Sales</span>
                                <div class="pull-right">
                                    <button class="btn btn-xs btn-default chart_switch" data-chart="line">Line</button>
                                    <button class="btn btn-xs btn-link chart_switch" data-chart="bar">Bar</button>
                                </div>
                            </div>
                            <div id="c3_7_days" style="height:280px"></div>
                        </div>-->
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

            <!-- c3 charts -->
            <script src="assets/lib/d3/d3.min.js"></script>
            <script src="assets/lib/c3/c3.min.js"></script>
            <!-- vector maps -->
            <script src="assets/lib/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="assets/lib/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
            <!-- countUp animation -->
            <script src="assets/js/countUp.min.js"></script>
            <!-- easePie chart -->
            <script src="assets/lib/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

            <script>
                $(function() {
                    // c3 charts
                    yukon_charts.p_dashboard();
                    // countMeUp
                    yukon_count_up.init();
                    // easy pie chart
                    yukon_easyPie_chart.p_dashboard();
                    // vector maps
                    yukon_vector_maps.p_dashboard();
                    // match height
                    yukon_matchHeight.p_dashboard();
                })
            </script>
		
        <!-- style switcher -->
      

    </body>

<!-- Mirrored from yukon-admin.tzdthemes.com/html/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:38:21 GMT -->
</html>
