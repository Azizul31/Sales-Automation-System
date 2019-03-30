<<<<<<< HEAD
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
        <input type="text" id="fname" name="firstname" placeholder="Shop id..">
      </div>
     <div class="col-25">
        <label for="fname">Item 1 quantity:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="0">
      </div>
<div class="col-25">
        <label for="fname">Item 2 quantity:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="0">
      </div>
<div class="col-25">
        <label for="fname">Item 3 quantity:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="0">
      </div>

      <div class="col-25">
        <label for="country">Date:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
         <option value="australia">01</option>
          <option value="canada">02</option>
          <option value="usa">03</option>
           <option value="australia">04</option>
          <option value="canada">05</option>
          <option value="usa">06</option>
 <option value="australia">07</option>
          <option value="canada">08</option>
          <option value="usa">09</option>
 <option value="australia">10</option>
          <option value="canada">11</option>
          <option value="usa">12</option>
 <option value="australia">13</option>
          <option value="canada">14</option>
          <option value="usa">15</option>
 <option value="australia">16</option>
          <option value="canada">17</option>
          <option value="usa">18</option>
 <option value="australia">19</option>
          <option value="canada">20</option>
          <option value="usa">21</option>
 <option value="australia">22</option>
          <option value="canada">23</option>
          <option value="usa">24</option>
 <option value="australia">25</option>
          <option value="canada">26</option>
          <option value="usa">27</option>
 <option value="australia">28</option>
          <option value="canada">29</option>
          <option value="usa">30</option>
        </select>
      </div>
      <div class="col-25">
        <label for="country">Day:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Saturday</option>
          <option value="canada">Sunday</option>
          <option value="usa">Monday</option>
          <option value="australia">Tuesday</option>
          <option value="canada">Wednesday</option>
          <option value="usa">Thursday</option>
         <option value="usa">Friday</option>
        </select>
      </div>

      <div class="col-25">
        <label for="country">Month:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">January</option>
          <option value="canada">February</option>
          <option value="usa">March</option>
          <option value="australia">April</option>
          <option value="canada">May</option>
          <option value="usa">June</option>
          <option value="australia">July</option>
          <option value="canada">August</option>
          <option value="usa">September</option>
          <option value="australia">October</option>
          <option value="canada">November</option>
          <option value="usa">December</option>
                                                                    
                                  
        </select>
      </div>

      <div class="col-25">
        <label for="country">Year:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">2017</option>
          <option value="canada">2018</option>
          <option value="usa">2019</option>
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


=======
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
        <input type="text" id="fname" name="firstname" placeholder="Shop id..">
      </div>
     <div class="col-25">
        <label for="fname">Item 1 quantity:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="0">
      </div>
<div class="col-25">
        <label for="fname">Item 2 quantity:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="0">
      </div>
<div class="col-25">
        <label for="fname">Item 3 quantity:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value="0">
      </div>

      <div class="col-25">
        <label for="country">Date:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
         <option value="australia">01</option>
          <option value="canada">02</option>
          <option value="usa">03</option>
           <option value="australia">04</option>
          <option value="canada">05</option>
          <option value="usa">06</option>
 <option value="australia">07</option>
          <option value="canada">08</option>
          <option value="usa">09</option>
 <option value="australia">10</option>
          <option value="canada">11</option>
          <option value="usa">12</option>
 <option value="australia">13</option>
          <option value="canada">14</option>
          <option value="usa">15</option>
 <option value="australia">16</option>
          <option value="canada">17</option>
          <option value="usa">18</option>
 <option value="australia">19</option>
          <option value="canada">20</option>
          <option value="usa">21</option>
 <option value="australia">22</option>
          <option value="canada">23</option>
          <option value="usa">24</option>
 <option value="australia">25</option>
          <option value="canada">26</option>
          <option value="usa">27</option>
 <option value="australia">28</option>
          <option value="canada">29</option>
          <option value="usa">30</option>
        </select>
      </div>
      <div class="col-25">
        <label for="country">Day:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Saturday</option>
          <option value="canada">Sunday</option>
          <option value="usa">Monday</option>
          <option value="australia">Tuesday</option>
          <option value="canada">Wednesday</option>
          <option value="usa">Thursday</option>
         <option value="usa">Friday</option>
        </select>
      </div>

      <div class="col-25">
        <label for="country">Month:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">January</option>
          <option value="canada">February</option>
          <option value="usa">March</option>
          <option value="australia">April</option>
          <option value="canada">May</option>
          <option value="usa">June</option>
          <option value="australia">July</option>
          <option value="canada">August</option>
          <option value="usa">September</option>
          <option value="australia">October</option>
          <option value="canada">November</option>
          <option value="usa">December</option>
                                                                    
                                  
        </select>
      </div>

      <div class="col-25">
        <label for="country">Year:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">2017</option>
          <option value="canada">2018</option>
          <option value="usa">2019</option>
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


>>>>>>> cba331c7a8a1ffbae05e054ac1add9c61ee3d331
