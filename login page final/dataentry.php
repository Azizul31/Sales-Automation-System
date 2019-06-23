<?php
ob_start();
include("head3.php");
include 'connect.inc.php';

echo $_SESSION['user_id'];
if (!loggedin()) header("location: index.php");
?>



<title>Dataentry Form</title>
<style>
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-weight: 600;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>
<div class="limiter">

		<div class="container-login100">
				<form class="login100-form validate-form" action= "" method="POST">
					<span class="login100-form-title">
                    <h1>Sales Entry</h1>   <br>
					</span>
<div class="row">
      <div class="col-25">
        <label for="fname">Shop id:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="shopid" placeholder="ShopID">
      </div>
     <div class="col-25">
        <label for="fname">Item 1 quantity:</label>
      </div>
      <div class="col-75">
        <input type="number" id="fname" name="Item1" value="1">
      </div>
<div class="col-25">
        <label for="fname">Item 2 quantity:</label>
      </div>
      <div class="col-75">
        <input type="number" id="fname" name="Item2" value="2">
      </div>
<div class="col-25">
        <label for="fname">Item 3 quantity:</label>
      </div>
      <div class="col-75">
        <input type="number" id="fname" name="Item3" value="3">
      </div>

      
      
   <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="Submit">
							Submit
						</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
<?php

include("foot.php");
?>

<?php

date_default_timezone_set('Asia/Dhaka');

$month = date("F");

$date = date("d");
$year = date("Y");
$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));

$day = jddayofweek($jd, 1);

if (isset($_POST ['shopid']) && isset ($_POST ['Item1'])&& isset ($_POST ['Item2'])&& isset ($_POST ['Item3'])) {
	$shop_id=$_POST ['shopid'];
	$Item1=$_POST ['Item1'];
	$Item2=$_POST ['Item2'];
	$Item3=$_POST ['Item3'];
	$Item1p=$Item1*30;
	$Item2p=$Item2*40;
	$Item3p=$Item3*45;
	$Total_sell=$Item1p+$Item2p+$Item3p;

	$sql=mysqli_query($link,"INSERT INTO `sales details` VALUES('','$date','$month','$year','$day','$shop_id','$Item1','$Item2','$Item3','$Item1p','$Item2p','$Item3p','$Total_sell')");
	if($sql)
        {
            header($current_file);
        }else{
        echo "The data was not inserted";
            }
		

}
?>
