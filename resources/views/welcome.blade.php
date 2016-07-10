<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Online bus ticket system</title>
    <meta name="description" content="description">
    <meta name="author" content="DevOOPS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
    <link href="plugins/select2/select2.css" rel="stylesheet">
    <link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
    <link href="css/style_v1.css" rel="stylesheet">
    <link href="plugins/chartist/chartist.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
    <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Start Header-->
<div id="screensaver">
    <canvas id="canvas"></canvas>
    <i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
    <div class="devoops-modal">
        <div class="devoops-modal-header">
            <div class="modal-header-name">
                <span>Basic table</span>
            </div>
            <div class="box-icons">
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="devoops-modal-inner">
        </div>
        <div class="devoops-modal-bottom">
        </div>
    </div>
</div>
<header class="navbar">
    <div class="container-fluid expanded-panel">
        <div class="row">
            <div id="logo" class="col-xs-12 col-sm-2">
                <a href="index_v1.html">Online bus ticket</a>
            </div>
            <div id="top-panel" class="col-xs-12 col-sm-10">
                <div class="row">
                    <div class="col-xs-8 col-sm-4">
                        
                    </div>
                    <div class="col-xs-4 col-sm-8 top-panel-right">
                       <!-- <a href="#" class="about">about</a>-->
                        
                        <ul class="nav navbar-nav pull-right panel-menu">
                            <li class="hidden-xs">
                                <a href="/admin/login" class="modal-link">
                                    <span class="badge">Admin</span>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a  href="/login">

                                    <span class="badge">User</span>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="ajax/page_messages.html" class="ajax-link">
                        
                                    <span class="badge">Cancel Tickets</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="row">
    <div id="breadcrumb" class="col-xs-12">
        <a href="#" class="show-sidebar">
            <i class="fa fa-bars"></i>
        </a>
        <ol class="breadcrumb pull-left">
            <li><a href="/admin_login">Admin</a></li>
            <li><a href="user_login">User</a></li>
            <li><a href="#">Cancel Ticket</a></li>
        </ol>
        <div id="social" class="pull-right">
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span></span>
                </div>
                
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                <h4 class="page-header"></h4>
                <form class="form-horizontal" role="form">
                    <div class="form-group">

                        <label class="col-sm-2 control-label">Leaving From</label>
                        
                        <div class="col-sm-4">
                            <!-- <input type="text" class="form-control" placeholder="First name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name"> -->
                            <select>
                            <option>Dhaka</option>
                            <option>Khulna</option>
                            <option>Chittagong</option>
                            <option>Bogra</option>

                        </select>
                        </div>
                        <label class="col-sm-2 control-label">Going To</label>
                        
                        <div class="col-sm-4">
                            <!-- <input type="text" class="form-control" placeholder="Last name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for last name"> -->
                            <select>
                            <option>Dhaka</option>
                            <option>Khulna</option>
                            <option>Chittagong</option>
                            <option>Bogra</option>
                            
                        </select>
                        </div>
                    </div>
                    

                    
                    <div class="form-group has-error has-feedback">
                        <label class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-4">
                            <input type="date" id="input_date" class="form-control" placeholder="Date">
                            <span class="fa fa-calendar txt-danger form-control-feedback"></span>
                        </div>
                    
                        <label class="col-sm-2 control-label">Coach Type</label>
                        <div class="col-sm-2">
                            <select>
                                <option>Ac</option>
                                <option>NonAc</option>
                            </select>
                        </div>
                    </div>
                
                    
                    
                    
                    <div class="form-group">
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary btn-label-left">
                            <span><i class="fa fa-clock-o"></i></span>
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>