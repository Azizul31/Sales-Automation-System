<?php
    include 'core.inc.php';
    include("head2.php");
?>
<title>Achievement Summary</title>
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
					
					
                    <h1 class="spacing">TARGET ACHIEVEMENT SUMMARY</h1>   <br>
					



        
      </div>
            
</div>
      
    </div>
    <body>
         

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Salesman ID</th>
    <th>Month</th>
    <th>Target</th>
    <th>Achievement (Tk)</th>
    <th>Achievement (%)</th>
    </tr>
    <tr>
    </tr>
    <?php
        include 'connect.inc.php';
        
        $id = $_SESSION ['user_id'];
        date_default_timezone_set('Asia/Dhaka');
        global $fetch;
        $month = date("F");
        $year = date("Y");
        
        function achievement ($link, $id1)
        {
            $month = date("F");
            $year = date("Y");
            
            $result = mysqli_query ($link, "SELECT SUM(`Total sale`) AS sale FROM `sales details` "
                    ."WHERE `Year` = '".$year."' AND `Month` = '".$month."' "
                    ."AND `Shop ID` IN (SELECT `Shop ID` FROM `shops` "
                    ."WHERE `Area Code` IN (SELECT `Area Code` FROM `salesmen` "
                    ."WHERE `salesmen`.`ID` = '".$id1."'))") or die ("error");    
            
            $fetch = mysqli_fetch_assoc($result);
            return $fetch['sale'];
        }
        
        $result = mysqli_query($link, "SELECT `ID` FROM `salesmen` "
                ."WHERE `Area Code` IN (SELECT `Area Code` FROM `distributors_areas` "
                ."WHERE `Regional_Manager` IN (SELECT `Name` FROM `regional managers` "
                ."WHERE `ID` = '".$id."') OR `Territory_Manager` IN (SELECT `Name` "
                ."FROM `territory managers` WHERE `ID` = '".$id."'))") or die("error");
        
        if (mysqli_num_rows($result) == 0) {
            $result = mysqli_query($link, "SELECT `ID` FROM `salesmen`");
        }
        
        $resultset=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $resultset[]=$row;
        }
        
        foreach ($resultset as $salesman_id) {
            foreach ($salesman_id as $value) {
                $ach = achievement ($link, $value);
                $result1 = mysqli_query($link, "SELECT `Name`, `Target` FROM `salesmen` "
                        ."WHERE `ID` = '".$value."'") or die ("error");

                $fetch1 = mysqli_fetch_assoc($result1);
                $percent = ($ach / $fetch1 ['Target']) * 100;

                echo '<tr><td>'.$fetch1['Name'].'</td>'
                        .'<td>'.$value.'</td>'
                        .'<td>'.$month.'</td>'
                        .'<td>'.$fetch1['Target'].'</td>'
                        .'<td>'.$ach.'</td>'
                        .'<td>'.number_format($percent, 2).'</td></tr>';
            }
        }
        
        //include("head2.php");
        
    ?>


                         
  
</table>
</body>
<?php
include("foot.php");
?>