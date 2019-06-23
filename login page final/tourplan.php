<?php
include("head2.php");
?>
<title>Tour Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
float: left;
 display: inline-block;
}
h1.spacing
    {
        text-align: center;
        padding-bottom: 0px;
    }
    
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: whitesmoke;
  color: black;
}
    .selection {
  width: 220px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 2px 20px 2px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
.selection:focus {
  width: 100%;
}
   
}
    
</style>
<div class="limiter">

		<div class="container-login100"  >
				<div class="login100-form validate-form">
					
					<span>
                    <h1 class="spacing">Salesman Selection</h1>   <br>
					</span>
<div class="row">
      <div class="col-25">
         <label for="fname"> Enter Name :</label>

      </div>
      <div class="col-75">
          <form action="tourplan.php" method="POST">
  <select class="selection" name="salesman">
    <option value="SM_001">Shahriar Ahmed</option>
    <option value="SM_002">Ratul Roy</option>
    <option value="SM_003">Towhidur Alam</option>
    <option value="SM_004">Labib Wahid</option>
    <option value="SM_005">Souharda Biswas</option>
    <option value="SM_006">Yasir Mahbub</option>
    <option value="SM_007">Mahbub Alam</option>
    <option value="SM_008">Abdullah Mamun</option>
    <option value="SM_009">Iqbal Hossain</option>
    <option value="SM_010">Kamrul Islam</option>
    <option value="SM_011">Ashef Habib</option>
    <option value="SM_012">Mahidul Zihan</option>
 </select>
  <br><br>
     <div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Submit">
							
					</div>	
                    </div>
</form>
     
   
      





        
      </div>
            
</div>
      
    </div>
    <body>
         

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Salesman ID</th>
    <th>Date</th>
    <th>Month</th>
    <th>Day</th>
    <th>Market ID</th>
    </tr>
    <tr>
    </tr>
    <?php
        include 'connect.inc.php';
        global $fetch;
        if ((isset($_POST['salesman']) && !empty($_POST['salesman']))) {
            $user_id = $_POST['salesman'];
            $result = mysqli_query ($link, "SELECT `salesmen`.`Name`,`salesmen_tour_programme`.`Date`,"
                    ."`salesmen_tour_programme`.`Day`,`salesmen_tour_programme`.`Month`,"
                    ."`salesmen_tour_programme`.`Market_ID`, `salesmen`.`ID` "
                    ."FROM `salesmen_tour_programme` "
                    ."JOIN `salesmen` ON `salesmen_tour_programme`.`Salesman_ID`='".$user_id."' "
                    ."AND `salesmen`.`ID`='".$user_id."'")
                    or die("error");
            //echo '<table style="width:100%;">';
            
        }
        else {
            $result = mysqli_query ($link, "SELECT `salesmen`.`Name`,`salesmen_tour_programme`.`Date`,"
                    ."`salesmen_tour_programme`.`Day`,`salesmen_tour_programme`.`Month`,"
                    ."`salesmen_tour_programme`.`Market_ID`, `salesmen`.`ID` FROM `salesmen_tour_programme` "
                    ."JOIN `salesmen` ON `salesmen_tour_programme`.`Salesman_ID`=`salesmen`.`ID`")
                    or die ("error");
        }
        
        if ($result)
            {
                while ($fetch = mysqli_fetch_assoc($result))
                {
                    echo '<tr><td>'.$fetch['Name'].'</td>'
                    .'<td>'.$fetch['ID'].'</td>'
                    .'<td>'.$fetch['Date'].'</td>'
                    .'<td>'.$fetch['Month'].'</td>'
                    .'<td>'.$fetch['Day'].'</td>'
                    .'<td>'.$fetch['Market_ID'].'</td></tr>';
                }
            }
    
    
    ?>


                         
  
</table>
</body>
<?php
include("foot.php");
?>