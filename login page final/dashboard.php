<?php
//include("head.php");
include 'core.inc.php';
include 'connect.inc.php';

$id = $_SESSION ['user_id'];
date_default_timezone_set('Asia/Dhaka');
global $fetch;

//function for getting current day and the 6 days before current day and calculate sale
function week_day($dif) {
    $jd = cal_to_jd(CAL_GREGORIAN, date("m"), date("d", strtotime($dif)), date("Y"));
    $day = jddayofweek($jd, 1);
    return $day;
}

function day_wise_sale($link, $id, $dif) {
    $month = date("F");
    $year = date("Y");
    $date = date("d", strtotime($dif));
    $result = mysqli_query($link, "SELECT SUM(`Total sale`) AS sale FROM `sales details` "
            . "WHERE `Year` = '" . $year . "' AND `Month` = '" . $month . "' AND `Date` = '" . $date . "' "
            . "AND `Shop ID` IN (SELECT `Shop ID` FROM `shops` "
            . "WHERE `Area Code` IN (SELECT `Area Code` FROM `distributors_areas` "
            . "WHERE `Regional_Manager` IN (SELECT `Name` FROM `regional managers` "
            . "WHERE `ID` = '" . $id . "') OR `Territory_Manager` IN (SELECT `Name` "
        . "FROM `territory managers` WHERE `ID` = '".$id."')))") or die("error");
    $fetch = mysqli_fetch_assoc($result);
    $day1 = $fetch ['sale'];
    return $day1;
}

function salesman_sale($link, $id) {
    $month = date("F");
    $year = date("Y");
    $date = date("d");
    $result = mysqli_query($link, "SELECT SUM(`Total sale`) AS sale FROM `sales details` "
            . "WHERE `Year` = '" . $year . "' AND `Month` = '" . $month . "' AND `Date` = '" . $date . "' "
            . "AND `Shop ID` IN (SELECT `Shop ID` FROM `shops` "
            . "WHERE `Area Code` IN (SELECT `Area Code` FROM `distributors_areas` "
            . "WHERE `Area Code` IN (SELECT `Area Code` FROM `salesmen` "
            . "WHERE `ID` = '" . $id . "')))") or die("error");
    $fetch = mysqli_fetch_assoc($result);
    $day1 = $fetch ['sale'];
    return $day1;
}

//get the days
$week_day1 = week_day("0 days");
$week_day2 = week_day("-1 days");
$week_day3 = week_day("-2 days");
$week_day4 = week_day("-3 days");
$week_day5 = week_day("-4 days");
$week_day6 = week_day("-5 days");
$week_day7 = week_day("-6 days");

//get current day and the 6 days before current day and calculate sale
$day1_sale = day_wise_sale($link, $id, "0 days");
$day2_sale = day_wise_sale($link, $id, "-1 days");
$day3_sale = day_wise_sale($link, $id, "-2 days");
$day4_sale = day_wise_sale($link, $id, "-3 days");
$day5_sale = day_wise_sale($link, $id, "-4 days");
$day6_sale = day_wise_sale($link, $id, "-5 days");
$day7_sale = day_wise_sale($link, $id, "-6 days");

$dataPoints = array(
    array("y" => $day7_sale, "label" => $week_day7),
    array("y" => $day6_sale, "label" => $week_day6),
    array("y" => $day5_sale, "label" => $week_day5),
    array("y" => $day4_sale, "label" => $week_day4),
    array("y" => $day3_sale, "label" => $week_day3),
    array("y" => $day2_sale, "label" => $week_day2),
    array("y" => $day1_sale, "label" => $week_day1)
);


$salesman1 = salesman_sale($link, "SM_001");
$salesman2 = salesman_sale($link, "SM_002");
$salesman3 = salesman_sale($link, "SM_003");
$salesman4 = salesman_sale($link, "SM_004");
$salesman5 = salesman_sale($link, "SM_005");
$salesman6 = salesman_sale($link, "SM_006");
$salesman7 = salesman_sale($link, "SM_007");
$salesman8 = salesman_sale($link, "SM_008");
$salesman9 = salesman_sale($link, "SM_009");
$salesman10 = salesman_sale($link, "SM_010");
$salesman11 = salesman_sale($link, "SM_011");
$salesman12 = salesman_sale($link, "SM_012");


$dataPoints1 = array(
    array("y" => $salesman1, "label" => "Shahriar"),
    array("y" => $salesman2, "label" => "Ratul"),
    array("y" => $salesman3, "label" => "Towhidur"),
    array("y" => $salesman4, "label" => "Labib"),
    array("y" => $salesman5, "label" => "Souharda"),
    array("y" => $salesman6, "label" => "Yasir"),
    array("y" => $salesman7, "label" => "Mahbub"),
    array("y" => $salesman8, "label" => "Abdullah"),
    array("y" => $salesman9, "label" => "Iqbal"),
    array("y" => $salesman10, "label" => "Kamrul"),
    array("y" => $salesman11, "label" => "Ashef"),
    array("y" => $salesman12, "label" => "Mahidul"),
);

//Total monthly sale
$month = date("F");
$year = date("Y");
$date = date("d");
$result = mysqli_query($link, "SELECT SUM(`Total sale`) AS sale FROM `sales details` "
        . "WHERE `Year` = '" . $year . "' AND `Month` = '" . $month . "' "
        . "AND `Shop ID` IN (SELECT `Shop ID` FROM `shops` "
        . "WHERE `Area Code` IN (SELECT `Area Code` FROM `distributors_areas` "
        . "WHERE `Regional_Manager` IN (SELECT `Name` FROM `regional managers` "
        . "WHERE `ID` = '" . $id . "') OR `Territory_Manager` IN (SELECT `Name` "
        . "FROM `territory managers` WHERE `ID` = '".$id."')))") or die("error");

$fetch = mysqli_fetch_assoc($result);
$total_tk = $fetch ['sale'];

//Target achivement
$result = mysqli_query($link, "SELECT SUM(`Target`) AS target FROM `salesmen` "
        . "WHERE `Area Code` IN (SELECT `Area Code` FROM `distributors_areas` "
        . "WHERE `Regional_Manager` IN (SELECT `Name` FROM `regional managers` "
        . "WHERE `ID` = '".$id."') OR `Territory_Manager` IN (SELECT `Name` "
        . "FROM `territory managers` WHERE `ID` = '".$id."'))") or die("error");

$fetch = mysqli_fetch_assoc($result);
$total_target = $fetch['target'];
$achievement = ($total_tk / $total_target) * 100;

//Total monthly amount of products
$result = mysqli_query ($link, "SELECT SUM(`Item 1`) AS item1, SUM(`Item 1`) AS item2, "
        ."SUM(`Item 1`) AS item3 FROM `sales details` "
        ."WHERE `Year` = '".$year."' AND `Month` = '".$month."' "
        ."AND `Shop ID` IN (SELECT `Shop ID` FROM `shops` "
        ."WHERE `Area Code` IN (SELECT `Area Code` FROM `distributors_areas` "
        ."WHERE `Regional_Manager` IN (SELECT `Name` FROM `regional managers` "
        ."WHERE `ID` = '".$id."') OR `Territory_Manager` IN (SELECT `Name` "
        . "FROM `territory managers` WHERE `ID` = '".$id."')))") or die ("error");
  
$fetch = mysqli_fetch_assoc($result);
$item1 = $fetch ['item1'];
$item2 = $fetch ['item2'];
$item3 = $fetch ['item3'];
$amount = $item1 + $item2 + $item3;

//Total bill/invoice amount today
$result = mysqli_query ($link, "SELECT `Item 1` FROM `sales details` "
        ."WHERE `Year` = '".$year."' AND `Month` = '".$month."' AND `Date` = '".$date."' "
        ."AND `Shop ID` IN (SELECT `Shop ID` FROM `shops` "
        ."WHERE `Area Code` IN (SELECT `Area Code` FROM `distributors_areas` "
        ."WHERE `Regional_Manager` IN (SELECT `Name` FROM `regional managers` "
        ."WHERE `ID` = '".$id."') OR `Territory_Manager` IN (SELECT `Name` "
        . "FROM `territory managers` WHERE `ID` = '".$id."')))") or die ("error");
  
$bill_no = mysqli_num_rows($result);

include("head.php");
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Weekly Sale"
                },
                axisY: {
                    title: "Sale (in taka)"
                },
                data: [{
                        type: "column",
                        yValueFormatString: "#,##0.## taka",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
            });
            chart.render();

            var chart2 = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Salesman wise sale"
                },
                axisY: {
                    title: "Sale (in taka)"
                },
                data: [{
                        type: "column",
                        yValueFormatString: "#,##0.## taka",
                        dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                    }]
            });
            chart2.render();

        }
    </script>



    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->

            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">



                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TOTAL SALE (MONTHLY)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Tk: <?php echo $total_tk; ?></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TARGET ACHIEVEMENT (MONTHLY)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $achievement; ?>%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">SOLD PRODUCT AMOUNT (MONTHLY)</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $amount; ?></div>
                                                    </div>
                                                    <div class="col">

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">BILL AMOUNT (TODAY)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $bill_no ?></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Sales Overview</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <!-- Pie Chart -->
                        <div>
                            <div class="row">
                                
                                <!-- Area Chart -->
                                <div class="col-xl-8 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                       
                                        <!-- Card Body -->
                                        
                                            <div class="chart-area">
                                                <div id="chartContainer2" style="height: 370px; width: 150%;"></div>
                                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                                            </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">




                                <!-- End of Footer -->

                            </div>
                            <!-- End of Content Wrapper -->

                        </div>
                        <!-- End of Page Wrapper -->

                        <!-- Scroll to Top Button-->
                        <a class="scroll-to-top rounded" href="#page-top">
                            <i class="fas fa-angle-up"></i>
                        </a>

                        <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="login.html">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bootstrap core JavaScript-->
                        <script src="vendor/jquery/jquery.min.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                        <!-- Core plugin JavaScript-->
                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                        <!-- Custom scripts for all pages-->
                        <script src="js/sb-admin-2.min.js"></script>

                        <!-- Page level plugins -->
                        <script src="vendor/chart.js/Chart.min.js"></script>

                        <!-- Page level custom scripts -->
                        <script src="js/demo/chart-area-demo.js"></script>
                        <script src="js/demo/chart-pie-demo.js"></script>

                        </body>

                        </html>
<?php
include("foot.php");
?>