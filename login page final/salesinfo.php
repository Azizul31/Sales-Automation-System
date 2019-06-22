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
     </div>
    <div class="col-25">
        <label for="fname"> Date :</label>
      </div>
      <div class="col-75">
      
  <select class="selection" name="cars">
    <option value="">01</option>
    <option value="">02</option>
    <option value="">03</option>
    <option value="">04</option>
    <option value="">05</option>
    <option value="">06</option>
    <option value="">07</option>
    <option value="">08</option>
    <option value="">09</option>
    <option value="">10</option>
    <option value="">11</option>
    <option value="">12</option>
    <option value="">13</option>
    <option value="">14</option>
    <option value="">15</option>
    <option value="">16</option>
    <option value="">17</option>
    <option value="">18</option>
    <option value="">19</option>
    <option value="">20</option>
    <option value="">21</option>
    <option value="">22</option>
    <option value="">23</option>
    <option value="">24</option>
    <option value="">25</option>
    <option value="">26</option>
    <option value="">27</option>
    <option value="">28</option>
    <option value="">29</option>
    <option value="">30</option>
    <option value="">31</option>
  </select>
  <br><br>
          </div>
    <div class="col-25">
      <label for="fname"> Month :</label>
     </div>
    <div class="col-75">
      
  <select class="selection" name="cars">
    <option value="">January</option>
    <option value="">February</option>
    <option value="">March</option>
    <option value="">April</option>
    <option value="">May</option>
    <option value="">June</option>
    <option value="">July</option>
    <option value="">August</option>
    <option value="">September</option>
    <option value="">October</option>
    <option value="">November</option>
    <option value="">December</option>
  </select>
  <br><br>
         </div>
          <div class="col-25">
      <label for="fname"> Year :</label>
     </div>
    <div class="col-75">
      
  <select class="selection" name="cars">
    <option value="">2019</option>
    <option value="">2018</option>
    <option value="">2017</option>
  </select>
  <br><br>
         </div>
           <div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Submit">
							
					</div>	
</form>
     
   
      
                    </div>





        
      </div>
            
</div>
      
    </div>
    <body>
         

<table id="customers">
  <tr>
    <th>Bill No.</th>
    <th>Date</th>
    <th>Month</th>
    <th>Year</th>
    <th>Day</th>
    <th>Shop id</th>
    <th>Item 1</th>
    <th>Item 2</th>
    <th>Item 3</th>
    <th>Item 1 price</th>
    <th>Item 2 price</th>
    <th>Item 3 price</th>
    <th>Total Sale</th>
    </tr>
    <tr>
    </tr>
    <?php
        include 'connect.inc.php';
        global $fetch;
        $result = mysqli_query ($link, "select * from `sales details`") or die ("error");
        //echo '<table style="width:100%;">';
        if ($result)
        {
            while ($fetch = mysqli_fetch_assoc($result))
            {
                echo '<tr><td>'.$fetch['Bill no.'].'</td>'
                .'<td>'.$fetch['Date'].'</td>'
                .'<td>'.$fetch['Month'].'</td>'
                .'<td>'.$fetch['Year'].'</td>'
                .'<td>'.$fetch['Day'].'</td>'
                .'<td>'.$fetch['Shop ID'].'</td>'
                .'<td>'.$fetch['Item 1'].'</td>'
                .'<td>'.$fetch['Item 2'].'</td>'
                .'<td>'.$fetch['Item 3'].'</td>'
                .'<td>'.$fetch['Item 1 p'].'</td>'
                .'<td>'.$fetch['Item 2 p'].'</td>'
                .'<td>'.$fetch['Item 3 p'].'</td>'
                .'<td>'.$fetch['Total sale'].'</td></tr>';
            }
        }
    
    
    ?>


                         
  
</table>
</body>
<?php
include("foot.php");
?>