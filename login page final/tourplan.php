<?php
include("head.php");
?>
<title>Sales Details</title>
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
        <form action="/action_page.php">
  <select class="selection" name="cars">
    <option value="Shahriar Ahmed">Shahriar Ahmed</option>
    <option value="Ratul Roy">Ratul Roy</option>
    <option value="Towhidur Alam">Towhidur Alam</option>
    <option value="Labib Wahid">Labib Wahid</option>
    <option value="Souharda Biswas">Souharda Biswas</option>
    <option value="Yasir Mahbub">Yasir Mahbub</option>
    <option value="Mahbub Alam">Mahbub Alam</option>
    <option value="Abdullah Mamun">Abdullah Mamun</option>
    <option value="Iqbal Hossain">Iqbal Hossain</option>
    <option value="Kamrul Islam">Kamrul Islam</option>
    <option value="Ashef Habib">Ashef Habib</option>
    <option value="Mahidul Zihan">Mahidul Zihan</option>
 </select>
  <br><br>
  
</form>
     
   
      
   <div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Submit">
							
					</div>	
                    </div>





        
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
       
    
    ?>


                         
  
</table>
</body>
<?php
include("foot.php");
?>