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
        	<?php
        	include("include/header.php");
        	?>
            <div id="main_wrapper">
                <div class="row">
                    <?php
        include_once ('functions.php');
        $con = new DB_con();
        $id=$_GET['id'];
        $res=$con->selectcompany($id);
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php 
                            echo '<img src="data:image/png;base64,' . base64_encode($row['logo']) . '"width="76" height="76"alt="" class="user_profile_img" />';

                            ?>
                            <!--<img class="user_profile_img" src="" alt="" width="76" height="76" />-->
                            <h1 class="user_profile_name"><?php echo $row['co_name']; ?></h1>
                            <p class="user_profile_info"><?php echo $row['co_about']; ?></p>
                        </div>
                    </div>
                    <div style="float: right;"><?php echo'<a href="edit_employer_profile.php?id='.$row['employerid'].'">'; ?> <span class="el-icon-pencil bs_ttip" title="" ></span></a></div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form">
                                <h3 class="heading_a"><span class="heading_text">General Info</span></h3>

                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['co_email'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Person to Contact</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['name'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Contact No.</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['contactno'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['address'].'">';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['stat'].'">';
                                        ?>
                                    </div>
                                </div>
        
        <?php
        }
        ?>
        <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form">
                                

                                <h3 class="heading_a"><span class="heading_text">Job Posts</span></h3>
                                
                                 <?php
                                 include('include/config.php');
                                 include_once ('functions.php');
                                 $con = new DB_con();
                                 $id=$_GET['id'];
                                $res=$con->showjob($id);
                             while($row=mysql_fetch_assoc($res))
                            {

                                 ?>
                                 <div style="float: right;"><?php echo'<a href="edit_employer_jobpost.php?id='.$row['employerid'].'">'; ?> <span class="el-icon-pencil bs_ttip" title="" ></span></a></div>

                                <div class="form-group">

                                    <label for="profile_name" class="col-sm-2 control-label">Job Title:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['job_title'].'">';
                                        ?>
                                         </div>
                                </div>
                                <div class="form-group">
                                 <label for="profile_name" class="col-sm-2 control-label">Job description:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['job_description'].'">';
                                        ?>
                                    </div></div>
                                <div class="form-group">
                                 <label for="profile_name" class="col-sm-2 control-label">Openings:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['opening'].'">';
                                        ?>
                                    </div></div> 
                                    <div class="form-group">
                                 <label for="profile_name" class="col-sm-2 control-label">Industry:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['industry'].'">';
                                        ?>
                                    </div></div>
                                    <div class="form-group">
                                  <label for="profile_name" class="col-sm-2 control-label">Posting date:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['postdate'].'">';
                                        ?>
                                    </div></div>  
                                    <div class="form-group">
                                    <label for="profile_name" class="col-sm-2 control-label">Deadline:</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo'<input type="text" class="form-control" id="profile_name" value="'.$row['deadline'].'">';
                                        ?>
                                    </div></div> 
                                    <div> *********</div>

        <?php } ?>
    </div>
</div>
            </div>
            <?php
            include("include/left_menu.php");
            ?>

        	</div>
        	<?php
        	include("include/footer.php");
        	?>
        </body>
        </html>