<?php
function query ($table, $username, $password, $link) {
    $query = "SELECT ID, Password 
                    FROM $table
                    WHERE ID='$username' AND Password='$password'";
    
<<<<<<< HEAD
    if (!empty ($username) && !empty($password)) {
        
        $query = "SELECT ID, Password 
                    FROM salesmen
                    WHERE Name='$username' AND Password='$password_hash'"; 
        
        if ($query_run = mysqli_query ($link, $query)) {
=======
    if ($query_run = mysqli_query ($link, $query)) {
>>>>>>> cba331c7a8a1ffbae05e054ac1add9c61ee3d331
            $query_num_rows = mysqli_num_rows ($query_run);
            echo $query_num_rows;
            
            if ($query_num_rows == 0) {
                return 0;
            }
            else if ($query_num_rows == 1) {
<<<<<<< HEAD
                header("location: dataentry.php");
    exit;
=======
                return 1;
>>>>>>> cba331c7a8a1ffbae05e054ac1add9c61ee3d331
                /*$user_id = mysqli_result ($query_run, 0, 'id');
                $_SESSION ['user_id'] = $user_id;
                header ('Location: index.php');*/
            }
        }
<<<<<<< HEAD
=======
}

if (isset($_POST ['username']) && isset ($_POST ['password'])) {
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    
    $password_hash = md5($password);
    $exec = 'executives';
    $exec = mysqli_real_escape_string ($link, $exec);
    $reg = 'regional managers';
    $reg = mysqli_real_escape_string ($link, $reg);
    $ter = 'territory managers';
    $ter = mysqli_real_escape_string ($link, $ter);
    $sal = 'salesmen';
    $sal = mysqli_real_escape_string ($link, $sal);
    if (!empty ($username) && !empty($password)) {
        
        if (query ($exec, $username, $password_hash, $link)) echo 'exec ok';
        else if (query ($reg, $username, $password_hash, $link)) echo 'reg ok';
        else if (query ($ter, $username, $password_hash, $link)) echo 'ter ok';
        else if (query ($sal, $username, $password_hash, $link)) echo 'sal ok';
        else echo 'hoy nai';
        
        
        
>>>>>>> cba331c7a8a1ffbae05e054ac1add9c61ee3d331
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
