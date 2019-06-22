<?php
include("head2.php");
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
float: left;
 display: inline-block;
}

h1.spacing
    {
        text-align: center;
        padding-bottom: 10px;
    }
</style>
<div class="limiter">

		<div class="container-login100">
				<form class="login100-form validate-form" action= "" method="POST">
					<span>
                    <h1 class="spacing">Salesman Selection</h1>   <br>
					</span>
<div class="row">
      <div class="col-25">
        <label for="fname"> Enter ID:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="">
      </div>

   <div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Submit">
							
					</div>	
                    </div>
    </form>
    </div>
</div>
<?php

include("foot.php");
?>



