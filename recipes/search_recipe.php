<?php
require 'classes/admin.php';
$admin=new Admin();
$result=$admin->all_ingredients();
$admin->clear_table();
if(isset($_POST['btn']))
{
    $result1=$admin->get_recipes($_POST);
}
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from crenoveative.com/envato/hangan/job-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 05:20:53 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>HaNgan - Job Portal Responsive HTML Template</title>
    <meta name="description" content="HTML Responsive Landing Page Template for Job Portal Based on Twitter Bootstrap 3.x.x" />
    <meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fav and Touch Icons -->
    <!--    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->
    <link rel="shortcut icon" href="images/ico/favicon.png">

    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">

    <!-- CSS Font Icons -->
    <link rel="stylesheet" href="icons/linearicons/style.css">
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="icons/rivolicons/style.css">
    <link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
    <link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
    <link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
    <link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

    <!-- CSS Custom -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->

</head>


<body class="not-transparent-header">

<!-- start Container Wrapper -->
<div class="container-wrapper">

    <!-- start Header -->
    <header id="header" >

        <!-- start Navbar (Header) -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

            <div class="container" >

                <div class="logo-wrapper ">
                    <div class="logo ">
                        <a href="index.php"><img src="images/logo.png" alt="Logo" style="margin-left: 50%"/></a>
                    </div>
                </div>

            </div>

            <div id="slicknav-mobile"></div>

        </nav>
        <!-- end Navbar (Header) -->


    </header>

    <!-- start Main Wrapper -->
    <div class="main-wrapper">

        <div class="pt-80 pb-50">

            <div class="container">

                <div class="category-group-wrapper with-background">

                    <div class="row">
                        <form action="#" method="post">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="text-center"><h3>Select Ingredients</h3></label>
                                    <select class="selectpicker show-tick form-control" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" multiple name="ing[]">
                                        <?php while ($row=mysql_fetch_assoc($result)){?>
                                            <option value="<?php echo $row['ingredient_id']?>" ><?php echo $row['ingredient_name']?></option>
                                        <?php }?>
                                    </select>
                                    <input type="submit" class="btn btn-search btn-block " name="btn" value="Search Recipe">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <table class="table table-bordered">
                            <tr>
                                <td>Image</td>
                                <td>Recipe Name</td>
                                <td>Action</td>
                            </tr>
                            <?php if(isset($result1)){?>
                                <?php while ($row=mysql_fetch_assoc($result1)){?>
                                    <tr>
                                        <td><img src="asset/..<?php echo $row['image']?>" style="height: 100px;width: 200px"></td>
                                        <td><?php echo $row['recipe_name']?></td>
                                        <td><a href="#">View</a></td>
                                    </tr>
                                <?php }?>
                            <?php }?>
                        </table>
                    </div>

                </div>

            </div>

        </div>
        <!-- end Main Wrapper -->

    </div> <!-- / .wrapper -->
    <!-- end Container Wrapper -->


    <!-- start Back To Top -->
    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>
    <!-- end Back To Top -->


    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
    <script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/handlebars.min.js"></script>
    <script type="text/javascript" src="js/jquery.countimator.js"></script>
    <script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/easy-ticker.js"></script>
    <script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
    <script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
    <script type="text/javascript" src="js/customs.js"></script>


</body>



<!-- Mirrored from crenoveative.com/envato/hangan/job-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jan 2017 05:20:57 GMT -->
</html>