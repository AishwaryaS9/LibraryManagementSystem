<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>View Books | Library Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
                    ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- forms CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/form/all-type-forms.css">
        <!-- educate icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/educate-custon-icon.css">
        <!-- morrisjs CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- dropzone CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/dropzone/dropzone.css">
        <!-- mCustomScrollbar CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
                    ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
                    ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

        <!-- modernizr JS
                    ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- Start Left menu area -->
        <?php include('./librariansidebar.php') ?>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="librariandashboard.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('./librarianheader.php') ?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Return Book</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <div class="add-product">
                                    <a href="librarian_viewreturnedbooks.php">View Returned Books</a>
                                                    </div>
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Return Book Informaton</a></li>
                                    <!--                                    <li><a href="#reviews"> Account Information</a></li>
                                                                        <li><a href="#INFORMATION">Social Information</a></li>-->
                                </ul>

                                <?php
                                $db_host = 'localhost'; // Server Name
                                $db_user = 'root'; // Username
                                $db_pass = ''; // Password
                                $db_name = 'lms'; // Database Name
                                $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                                if (!$conn) {
                                    die('Failed to connect to MySQL: ' . mysqli_connect_error());
                                }
                                $sql = 'SELECT * FROM issuebooks where Status="Approved"';
                                $query = mysqli_query($conn, $sql);
                                if (!$query) {
                                    die('SQL Error: ' . mysqli_error($conn));
                                }
                                ?>


                                <div class="product-status mg-b-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap drp-lst">
                                                    <h4>Issue Book List</h4>
                                                    <div class="add-product">
                                                    </div>
                                                    <div class="asset-inner">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Issue ID</th>
                                                                    <th>Member ID</th>
                                                                    <th>Book ID</th>                                                                  
                                                                    <th>Book Title</th>
                                                                    <th>Issue Date</th>
                                                                    <th>Due Date</th>
                                                                    <th>Return Date</th>
                                                                    <th>Period</th>
                                                                    <th>Penalty(In Rs)</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                                <?php
                                                                while ($row = mysqli_fetch_array($query)) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $row['IssueID'] ?></td>
                                                                        <td><?php echo $row['MemberID'] ?></td>
                                                                        <td><?php echo $row['BookID'] ?></td>
                                                                        <td><?php echo $row['BookTitle'] ?></td>
                                                                        <td><?php echo $row['IssueDate'] ?></td>
                                                                        <td><?php echo $row['DueDate'] ?></td>
                                                                        <td>
                                                                            <?php
                                                                            $timezone = "Asia/Kolkata";
                                                                            date_default_timezone_set($timezone);
                                                                            $today = date("Y-m-d");
                                                                            echo $today;
                                                                            ?>

                                                                        </td>
                                                                        <td><?php echo $row['Period'] ?></td> 


                                                                        <td>
                                                                            <?php                                                                         
                                                                            $penalty = '';
                                                                            $i_date = $row['IssueDate'];
                                                                            $i_date1 = strtotime($i_date);
                                                                            $d_date = $row['DueDate'];
                                                                            $to_date = time(); // Return Date
                                                                            $from_date = strtotime($d_date);
                                                                            $day_diff = $to_date - $from_date;                                                                            
                                                                            $days = floor($day_diff / (60 * 60 * 24)) . "\n";                                                                          
                                                                          //   $row = mysqli_fetch_assoc($query);
                                                                              if ($days > 15) {
                                                                                $penalty = 5;
                                                                                $fine = $days * $penalty;
                                                                                echo $fine;
                                                                            } else {
                                                                                $fine = 0;
                                                                                echo $fine;
                                                                            } 
                                                                            
                                                                            
                                                                            ?>
                                                                        </td>
                                                                        <td><?php
                                                                        if($days>15)
                                                                        {
                                                                            echo 'Expired';
                                                                        }
                                                                        else
                                                                        {
                                                                        echo $row['Status'];
                                                                        }
                                                                                ?></td>
                                                                        <td><button class="btn" name="btnreturn" ><a href="returnbook_code.php?rb=<?php echo $row['IssueID']; ?>">Return Book</a></button></td>
                                                                    </tr>
                                                                            <?php
                                                                        }
                                                                        ?>

                                                            </tbody> 
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jquery
                    ============================================ -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
                    ============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
                    ============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
                    ============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
                    ============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
                    ============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- sticky JS
                    ============================================ -->
        <script src="js/jquery.sticky.js"></script>
        <!-- scrollUp JS
                    ============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
                    ============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
                    ============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <!-- morrisjs JS
                    ============================================ -->
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <!-- calendar JS
                    ============================================ -->
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
        <!-- maskedinput JS
                    ============================================ -->
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/masking-active.js"></script>
        <!-- datepicker JS
                    ============================================ -->
        <script src="js/datepicker/jquery-ui.min.js"></script>
        <script src="js/datepicker/datepicker-active.js"></script>
        <!-- form validate JS
                    ============================================ -->
        <script src="js/form-validation/jquery.form.min.js"></script>
        <script src="js/form-validation/jquery.validate.min.js"></script>
        <script src="js/form-validation/form-active.js"></script>
        <!-- dropzone JS
                    ============================================ -->
        <script src="js/dropzone/dropzone.js"></script>
        <!-- tab JS
                    ============================================ -->
        <script src="js/tab.js"></script>
        <!-- plugins JS
                    ============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
                    ============================================ -->
        <script src="js/main.js"></script>
    </body>

</html>