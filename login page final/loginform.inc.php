<?php
function query ($table, $username, $password, $link) {
    $query = "SELECT ID, Password 
                    FROM $table
                    WHERE ID='$username' AND Password='$password'";
    
    if ($query_run = mysqli_query ($link, $query)) {
            $query_num_rows = mysqli_num_rows ($query_run);
            echo $query_num_rows;
            
            if ($query_num_rows == 0) {
                return 0;
            }
            else if ($query_num_rows == 1) {
                return 1;
                /*$user_id = mysqli_result ($query_run, 0, 'id');
                $_SESSION ['user_id'] = $user_id;
                header ('Location: index.php');*/
            }
        }
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
        
        
        
    }
    else echo 'You must supply a username and password.';
}
else echo '<br>vog';

?>

<form action = "index.php" method = "POST">
    <input type="text" name="username"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>