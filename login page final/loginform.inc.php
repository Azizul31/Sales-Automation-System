<?php

if (isset($_POST ['username']) && isset ($_POST ['password'])) {
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    
    $password_hash = md5($password);
    
    if (!empty ($username) && !empty($password)) {
        
        $query = "SELECT ID, Password 
                    FROM salesmen
                    WHERE Name='$username' AND Password='$password_hash'"; 
        
        if ($query_run = mysqli_query ($link, $query)) {
            $query_num_rows = mysqli_num_rows ($query_run);
            echo $query_num_rows;
            
            if ($query_num_rows == 0) {
                echo 'Invalid username/password combo';
            }
            else if ($query_num_rows == 1) {
                header("location: dataentry.php");
    exit;
                /*$user_id = mysqli_result ($query_run, 0, 'id');
                $_SESSION ['user_id'] = $user_id;
                header ('Location: index.php');*/
            }
        }
    }
    else echo 'You must supply a username and password.';
}
include("head.php");

?>

<div class="limiter">

		<div class="container-login100">
				<form class="login100-form validate-form" action="index.php" method="POST">
					<span class="login100-form-title">
                    <h1>Samah Razor Blades Ind. Limited</h1>   <br>
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="Submit"  >
							
					</div>
				</form>
			</div>
		</div>
<?php
include("foot.php");
?>
