<?php
ob_start();
include 'core.inc.php';
include 'connect.inc.php';
include("head.php");

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
        <input type="text" id="fname" name="shopid" placeholder=name>
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

      <div class="col-25">
        <label for="country">Date:</label>
      </div>
      <div class="col-75">
        <select id="country" name="date">
         <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
           <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
 <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
 <option value="10">10</option>
          <option value="11">11</option>
          <option value="13">12</option>
 <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
 <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
 <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
 <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
 <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
 <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
        </select>
      </div>
      <div class="col-25">
        <label for="country">Day:</label>
      </div>
      <div class="col-75">
        <select id="country" name="day">
          <option value="Saturday">Saturday</option>
          <option value="Sunday">Sunday</option>
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
         <option value="Friday">Friday</option>
        </select>
      </div>

      <div class="col-25">
        <label for="country">Month:</label>
      </div>
      <div class="col-75">
        <select id="country" name="month">
          <!--<option value="January">January</option>*/-->
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
                                                                    
                                  
        </select>
      </div>

      <div class="col-25">
        <label for="country">Year:</label>
      </div>
      <div class="col-75">
        <select id="country" name="year">
			<option value="2019">2019</option>
			<option value="2018">2018</option>
            <option value="2017">2017</option>
          
          
        </select>
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

if (isset($_POST ['shopid']) && isset ($_POST ['Item1'])&& isset ($_POST ['Item2'])&& isset ($_POST ['Item3'])&& isset ($_POST ['date'])&& isset ($_POST ['day'])&& isset ($_POST ['month'])&& isset ($_POST ['year'])) {
	$shop_id=$_POST ['shopid'];
	$Item1=$_POST ['Item1'];
	$Item2=$_POST ['Item2'];
	$Item3=$_POST ['Item3'];
	$date=$_POST ['date'];
	$day=$_POST ['day'];
	$month=$_POST ['month'];
	$year=$_POST ['year'];
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
