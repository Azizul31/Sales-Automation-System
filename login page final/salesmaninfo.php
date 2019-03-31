<?php
include("head.php");
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
				<div class="login100-form validate-form">
					<span>
                    <h1 class="spacing">Salesman Information</h1>   <br>
					</span>
<div class="row">
      <div class="col-25">
        <label for="fname">Salesman ID :</label>
        <label for="fname"> Date :</label>
        <label for="fname"> Day :</label>
        <label for="fname"> Month :</label>
       <label for="fname"> Market List :</label>
      </div>
      
    </div>
    </div>
</div>
<?php

include("foot.php");
?>



