<?php

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = md5 ($password);
        
        if (!empty($username) && !empty($password)) {
            $query = "SELECT `ID`, `Name` FROM "
                ."`salesmen` WHERE `ID` = '".$username."' "
                ."AND `Password` = '".$password_hash."'";
            if($query_run = mysqli_query($link, $query)) {
                $query_num_rows = mysqli_num_rows($query_run);
                
                if ($query_num_rows == 1) {
                    $fetch = mysqli_fetch_assoc($query_run);
                    $user_id = $fetch['ID'];
                    $_SESSION['user_id'] = $user_id;
                    header('Location: index.php');
                }
                elseif ($query_num_rows == 0) {
                    $query = "SELECT `ID`, `Name` FROM "
                    ."`executives` WHERE `ID` = '".$username."' "
                    ."AND `Password` = '".$password_hash."'";
                    if($query_run = mysqli_query($link, $query)) {
                        $query_num_rows = mysqli_num_rows($query_run);

                        if ($query_num_rows == 1) {
                            $fetch = mysqli_fetch_assoc($query_run);
                            $user_id = $fetch['ID'];
                            $_SESSION['user_id'] = $user_id;
                            header('Location: index.php');
                        }
                        elseif ($query_num_rows == 0) {
                            $query = "SELECT `ID`, `Name` FROM "
                            ."`regional managers` WHERE `ID` = '".$username."' "
                            ."AND `Password` = '".$password_hash."'";
                            if($query_run = mysqli_query($link, $query)) {
                                $query_num_rows = mysqli_num_rows($query_run);

                                if ($query_num_rows == 1) {
                                    $fetch = mysqli_fetch_assoc($query_run);
                                    $user_id = $fetch['ID'];
                                    $_SESSION['user_id'] = $user_id;
                                    header('Location: index.php');
                                }
                                elseif ($query_num_rows == 0) {
                                    $query = "SELECT `ID`, `Name` FROM "
                                    ."`territory managers` WHERE `ID` = '".$username."' "
                                    ."AND `Password` = '".$password_hash."'";
                                    if($query_run = mysqli_query($link, $query)) {
                                        $query_num_rows = mysqli_num_rows($query_run);

                                        if ($query_num_rows == 1) {
                                            $fetch = mysqli_fetch_assoc($query_run);
                                            $user_id = $fetch['ID'];
                                            $_SESSION['user_id'] = $user_id;
                                            header('Location: index.php');
                                        }
                                        elseif ($query_num_rows == 0) {
                                            echo 'Invalid username/password combination.';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        else {
            echo 'You must supply a username & password';
        }
    }
    
include("head.php");

?>
<style>

    p.invalid
    {
        font-weight: 700;
        color:red;
    }
</style>
<div class="limiter">

		<div class="container-login100">
                    <form class="login100-form validate-form" action="<?php echo $current_file; ?>" method="POST">
					<span class="login100-form-title">
                                            <h1>Samah Razor Blades Ind. Limited</h1> <br>
                                            Member Login <br>
                                       <p class="invalid">     <?php if (!empty($username) && !empty($password)) {
                                                if ($query_num_rows == 0) {
                                                echo 'Invalid username/password combination.';}} ?> </p>
                                                
					</span>
                <br>    
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