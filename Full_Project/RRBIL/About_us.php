<?php
include 'core.inc.php';
if (loggedin()) {
    if (strcmp("SM", $_SESSION['user_id']) == -4) {
        include("head3.php");
    }
    else include("head2.php");
}
else include 'head.php';
?>

<title>About Us</title>
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
    p.spacing
    {
        text-align:left;
        padding-left: 10px;
        font-family: sans-serif;
        font-size: 20px;
        color: #333333;
        line-height: 1.2;
        text-align: left;
        display: block;
        padding-bottom: 70px;
        padding-top: 30px;
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
					<div class="login100-form-title">
					<span>
                    <h1 class="spacing">About Us!</h1>   <br>
					</span>
                        </div>
            </div>
            </div>
            </div>
            

      
    <body>
         
<p class="spacing">Rupom Razor Blades Industries Limited (RRBIL) was established in 1995 to manufacture pure Razor Blades and is a pioneer industry of its kind in whole Asia. RRBIL is gradually expanding capacity to meet its growing international demand due to its superior product quality and services. RRBIL is the market leader in Carbon Steel, Stainless Steel and system segment.
        </p>
<p class="spacing">RRBIL Blade manufacturing unit is located in Dhaka, the capital city of Bangladesh and presently employs about 1000 peeople working in different shifts.
        </p>
        </div>
  
</body>
<?php
include("foot.php");
?>