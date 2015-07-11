<?php
include("include/config.php");
?>
<head>
        <meta charset="UTF-8">
        <title>Details</title>
        <?php
            include("include/css.php");
            ?>
        
</head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
            <?php
            include("include/header.php");
            ?>


            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="list-group">
                                <a href="javascript:void(0)" class="active list-group-item">Employers</a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3">
                                    <select class="form-control input-sm" id="userStatus">
                                        <option></option>
                                        <option value="Available">Available</option>
                                        <option value="Unavailable">Unavailable</option>
                                    </select>
                                    <span class="help-block">Status</span>
                                </div>
                                <div class="col-md-3">
                                    <input id="textFilter" type="hidden" class="form-control input-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="5">
                                        <thead>
                                            <tr>
                                                <th data-toggle="true">Company Name</th>
                                                <th data-hide="phone"> Status</th>
                                                <th data-hide="phone"> Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                     <?php
        include_once ('functions.php');
        $con = new DB_con();
        $res=$con->selectemployer();
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                                            <tr>
                                                <td><?php  echo $row['co_name'] ?></td>
                                                <?php
                                                if ($row['stat'] =="Available") {
                                                    echo '<td data-value="'.$row['employerid'].'"><span class="label label-success status-active" title="Available">'.$row['stat'].'</span></td>';                                        
                                                }
                                                else {
                                                    echo '<td data-value="'.$row['employerid'].'"><span class="label label-warning status-suspended" title="Unavailable" style="background-color:red;">'.$row['stat'].'</span></td>';                                                                                        
                                                }
                                                ?>
                                                <td>
                                                    <?php
                                                    echo '<a href="employer_details.php?id='.$row['employerid'].'">';
                                                    echo '<span class="el-icon-eye-open bs_ttip" title="" style="margin-right: 8px;" ></span></a>';
                                                    echo '<a href="edit_employer_profile.php?id='.$row['employerid'].'">';
                                                    echo '<span class="el-icon-pencil bs_ttip" title="" style="margin-right: 8px;" ></span></a>';
                                                    echo '<a href="employer_delete.php?id='.$row['employerid'].'">';
                                                    echo '<span class="el-icon-trash bs_ttip" title=""></span></a>';
                                                    ?>
                                                </td>
                                            </tr>
        <?php } ?>
                                            
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
            <?php
            include("include/left_menu.php");
            ?>
        </div>
        <?php
            include("include/footer.php");
            ?>

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

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
		  
			ga('create', 'UA-54304677-1', 'auto');
			ga('send', 'pageview');
		</script>

    </body>

<!-- Mirrored from yukon-admin.tzdthemes.com/html/plugins-tables_footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:40:33 GMT -->
</html>
