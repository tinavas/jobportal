<!DOCTYPE html>
<html>
    
<!-- Mirrored from yukon-admin.tzdthemes.com/html/forms-regular_elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:38:28 GMT -->
<head>
		<meta charset="UTF-8">
		<title>Yukon Admin HTML v1.5 (forms-regular_elements)</title>
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

    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
            <header id="main_header">
                <div class="container-fluid">
                    <div class="brand_section">
                        <a href="dashboard.php"><img src="assets/img/logo.png" alt="site_logo" width="63" height="26"></a>
                    </div>
                    <ul class="header_notifications clearfix">
                        <li class="dropdown">
                            <span class="label label-danger">8</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-envelope"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <img src="assets/img/avatars/avatar02_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit amet&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar03_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar04_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar05_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit amet&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All messages</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown" id="tasks_dropdown">
                            <span class="label label-danger">14</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-tasks"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-warning pull-right">Medium</div>
                                            <small class="text-muted">YUK-21 (24.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-danger pull-right">High</div>
                                            <small class="text-muted">YUK-8 (26.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-success pull-right">Medium</div>
                                            <small class="text-muted">DES-14 (25.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All tasks</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <span class="label label-primary">2</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-bell"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        <small class="text-muted">20 minutes ago</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor sit&hellip;</p>
                                        <small class="text-muted">44 minutes ago</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor&hellip;</p>
                                        <small class="text-muted">10:55</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All Alerts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="header_user_actions dropdown">
                        <div data-toggle="dropdown" class="dropdown-toggle user_dropdown">
                            <div class="user_avatar">
                                <img src="assets/img/avatars/avatar08_tn.png" alt="" title="Carrol Clark (carrol@example.com)" width="38" height="38">
                            </div>
                            <span class="caret"></span>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="pages-user_profile.php">User Profile</a></li>
                            <li><a href="pages-user_profile2.php">User Profile 2</a></li>
                            <li><a href="login_page.php">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="search_section hidden-sm hidden-xs">
                        <input type="text" class="form-control input-sm">
                        <button class="btn btn-link btn-sm" type="button"><span class="icon_search"></span></button>
                    </div>
                </div>
            </header>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="dashboard.php">Home</a></li><li><span>Forms</span></li><li><span>Regular Elements</span></li>        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <fieldset>
                        <legend><span>Legend</span></legend>
                    </fieldset>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="reg_input">Text input</label>
                                <input type="text" id="reg_input" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="reg_textarea">Textarea</label>
                                <textarea name="reg_textarea" id="reg_textarea" cols="10" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="reg_select">Select</label>
                                <select id="reg_select" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reg_select_multiple">Select (multiple)</label>
                                <select multiple="multiple" id="reg_select_multiple" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Checkbox (stacked)</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Option 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Option 2
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label>Radio (stacked)</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Option 1
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option 2
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label>Checkbox (inline)</label>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Option 1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> Option 2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> Option 3
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label>Radio (inline)</label>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="inline_optionsRadios" id="inline_optionsRadios1" value="option1">
                                    Option 1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="inline_optionsRadios" id="inline_optionsRadios2" value="option2" checked>
                                    Option 2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="inline_optionsRadios" id="inline_optionsRadios3" value="option3">
                                    Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Progress bars</span></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            60%
                                        </div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                            <span class="sr-only">35% Complete (success)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                            <span class="sr-only">20% Complete (warning)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                            <span class="sr-only">10% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Validation states</span></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group has-success">
                                        <input type="text" class="form-control">
                                        <span class="help-block">Success!</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-error">
                                        <input type="text" class="form-control">
                                        <span class="help-block">Please correct the error</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group has-info">
                                        <input type="text" class="form-control">
                                        <span class="help-block">Username is already taken</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-warning">
                                        <input type="text" class="form-control">
                                        <span class="help-block">Something may have gone wrong</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group has-success has-feedback">
                                        <label class="control-label" for="inputSuccess">Input with success</label>
                                        <input type="text" class="form-control" id="inputSuccess">
                                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-info has-feedback">
                                        <label class="control-label" for="inputInfo">Input with info</label>
                                        <input type="text" class="form-control" id="inputInfo">
                                        <span class="glyphicon glyphicon-info-sign form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-error has-feedback">
                                        <label class="control-label" for="inputError">Input with error</label>
                                        <input type="text" class="form-control" id="inputError">
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-warning has-feedback">
                                        <label class="control-label" for="inputWarning">Input with warning</label>
                                        <input type="text" class="form-control" id="inputWarning">
                                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Prepended and appended inputs</span></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group sepH_b">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group sepH_b">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group sepH_b">
                                        <div class="input-group-btn" dropdown>
                                            <button class="btn btn-primary" type="button">Action</button>
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group sepH_b">
                                        <input class="form-control" id="appendedInputButton" type="text">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Go!</button>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="appendedDropdownButton" class="form-control">
                                        <div class="input-group-btn dropdown">
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Grid</span></div>
                            <div class="row sepH_b">
                                <div class="col-sm-12">
                                    <input type="text" placeholder=".col-sm-12" class="form-control">
                                </div>
                            </div>
                            <div class="row sepH_b">
                                <div class="col-sm-5">
                                    <input type="text" placeholder=".col-sm-5" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" placeholder=".col-sm-3" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                </div>
                            </div>
                            <div class="row sepH_b">
                                <div class="col-sm-6">
                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                </div>
                            </div>
                            <div class="row sepH_b">
                                <div class="col-sm-2">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" placeholder=".col-sm-2" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Control sizing</span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder=".input-lg" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Default input" class="form-control">
                                    </div>
                                    <input type="text" placeholder=".input-sm" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Static control</span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-10">
                                                <p class="form-control-static">email@example.com</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- main menu -->
            <nav id="main_menu">
                <div class="menu_wrapper">
                    <ul>
                        <li class="first_level">
                            <a href="dashboard.php">
                                <span class="icon_house_alt first_level_icon"></span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_document_alt first_level_icon"></span>
                                <span class="menu-title">Forms</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Forms</li>
                                <li><a class="act_nav" href="forms-regular_elements.php">Regular Elements</a></li>
                                <li><a href="forms-extended_elements.php">Extended Elements</a></li>
                                <li><a href="forms-gridforms.php">Gridforms</a></li>
                                <li><a href="forms-validation.php">Validation</a></li>
                                <li><a href="forms-wizard.php">Wizard</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_folder-alt first_level_icon"></span>
                                <span class="menu-title">Pages</span>
                                <span class="label label-danger">12</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Pages</li>
                                <li><a href="pages-chat.php">Chat</a></li>
                                <li><a href="pages-contact_list.php">Contact List</a></li>
                                <li><a href="error_404.php">Error 404</a></li>
                                <li><a href="pages-help_faq.php">Help/Faq</a></li>
                                <li><a href="pages-invoices.php">Invoices</a></li>
                                <li><a href="login_page.php">Login Page</a></li>
                                <li><a href="login_page2.php">Login Page 2</a></li>
                                <li><a href="pages-mailbox.php">Mailbox</a></li>
                                <li><a href="pages-mailbox_compose.php">Mailbox (compose)</a></li>
                                <li><a href="pages-mailbox_message.php">Mailbox (details)</a></li>
                                <li><a href="pages-search_page.php">Search Page</a></li>
                                <li><a href="pages-user_list.php">User List</a></li>
                                <li><a href="pages-user_profile.php">User Profile</a></li>
                                <li><a href="pages-user_profile2.php">User Profile 2</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_puzzle first_level_icon"></span>
                                <span class="menu-title">Components</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Components</li>
                                <li><a href="components-bootstrap.php">Bootstrap</a></li>
                                <li><a href="components-gallery.php">Gallery</a></li>
                                <li><a href="components-grid.php">Grid</a></li>
                                <li><a href="components-icons.php">Icons</a></li>
                                <li><a href="components-notifications_popups.php">Notifications/Popups</a></li>
                                <li><a href="components-typography.php">Typography</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_lightbulb_alt first_level_icon"></span>
                                <span class="menu-title">Plugins</span>
                                <span class="label label-danger">6</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Plugins</li>
                                <li><a href="plugins-ace_editor.php">Ace Editor</a></li>
                                <li><a href="plugins-calendar.php">Calendar</a></li>
                                <li><a href="plugins-charts.php">Charts</a></li>
                                <li><a href="plugins-gantt_chart.php">Gantt Chart</a></li>
                                <li><a href="plugins-google_maps.php">Google Maps</a></li>
                                <li><a href="plugins-tables_footable.php">Tables</a></li>
                                <li><a href="plugins-vector_maps.php">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="first_level has_submenu">
                            <a href="javascript:void(0)">
                                <span class="first_level_icon icon_menu-circle_alt2"></span>
                                <span class="menu-title">Sub menu</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Sub menu</li>
                                <li><a href="javascript:void(0)">01. Lorem ipsum</a></li>
                                <li class="has_submenu">
                                    <a href="javascript:void(0)">02. Lorem ipsum</a>
                                    <ul>
                                        <li class="has_submenu">
                                            <a href="javascript:void(0)">02.1 Lorem ipsum dolor sit amet</a>
                                            <ul>
                                                <li><a href="javascript:void(0)">02.1.1 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.2 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.3 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.4 Lorem ipsum</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">02.2 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">02.3 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">02.4 Lorem ipsum</a></li>
                                    </ul>
                                </li>
                                <li class="has_submenu">
                                    <a href="javascript:void(0)">03. Lorem ipsum</a>
                                    <ul>
                                        <li><a href="javascript:void(0)">03.1 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.2 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.3 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.4 Lorem ipsum</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">04. Lorem ipsum</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu_toggle">
                    <span class="icon_menu_toggle">
                        <i class="arrow_carrot-2left toggle_left"></i>
                        <i class="arrow_carrot-2right toggle_right" style="display:none"></i>
                    </span>
                </div>
            </nav>

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


        <!-- style switcher -->
        <div id="style_switcher">
            <a class="switcher_toggle"><i class="icon_cog"></i></a>
            <div class="style_items">
                <div class="heading_b"><span class="heading_text">Top Bar Color</span></div>
                <ul class="clearfix" id="topBar_style_switch">
                    <li class="sw_tb_style_0 style_active" title=""><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_1" title="topBar_style_1"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_2" title="topBar_style_2"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_3" title="topBar_style_3"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_4" title="topBar_style_4"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_5" title="topBar_style_5"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_6" title="topBar_style_6"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_7" title="topBar_style_7"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_8" title="topBar_style_8"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_9" title="topBar_style_9"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_10" title="topBar_style_10"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_11" title="topBar_style_11"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_12" title="topBar_style_12"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_13" title="topBar_style_13"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_14" title="topBar_style_14"><span class="icon_check_alt2"></span></li>
                </ul>
            </div>
            <hr/>
            <div class="clearfix hidden-sm hidden-md hidden-xs sepH_b">
                <label>Fixed layout</label>
                <div class="pull-right"><input type="checkbox" id="fixed_layout_switch" class="js-switch mini-switch"></div>
            </div>
            <div class="style_items hidden-sm hidden-md hidden-xs" id="fixed_layout_bg_switch">
                <hr/>
                <div class="heading_b"><span class="heading_text">Background</span></div>
                <ul class="clearfix">
                    <li class="sw_bg_0" title="bg_0"></li>
                    <li class="sw_bg_1" title="bg_1"></li>
                    <li class="sw_bg_2" title="bg_2"></li>
                    <li class="sw_bg_3" title="bg_3"></li>
                    <li class="sw_bg_4" title="bg_4"></li>
                    <li class="sw_bg_5" title="bg_5"></li>
                    <li class="sw_bg_6" title="bg_6"></li>
                    <li class="sw_bg_7" title="bg_7"></li>
                </ul>
                <hr/>
            </div>
            <div class="clearfix sepH_b">
                <label>Top Menu</label>
                <div class="pull-right"><input type="checkbox" id="top_menu_switch" class="js-switch mini-switch"></div>
            </div>
            <div class="clearfix sepH_b">
                <label>Hide Breadcrumbs</label>
                <div class="pull-right"><input type="checkbox" id="breadcrumbs_hide" class="js-switch mini-switch"></div>
            </div>
            <div class="text-center sepH_a">
                <button data-toggle="modal" data-target="#showCSSModal" id="showCSS" class="btn btn-default btn-xs btn-outline" type="button">Show CSS</button>
            </div>
        </div>
        <div class="modal fade" id="showCSSModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">CSS Classes</h4>
                    </div>
                    <div class="modal-body">
                        <pre id="showCSSPre"></pre>
                    </div>
                </div>
            </div>
        </div>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
		  
			ga('create', 'UA-54304677-1', 'auto');
			ga('send', 'pageview');
		</script>

    </body>

<!-- Mirrored from yukon-admin.tzdthemes.com/html/forms-regular_elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:38:28 GMT -->
</html>
