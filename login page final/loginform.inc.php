<?php

if (isset($_POST ['username']) && isset ($_POST ['password'])) {
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    
    $password_hash = md5($password);
    
    if (!empty ($username) && !empty($password)) {
        
        $query = "SELECT ID, Password 
                    FROM executives
                    WHERE ID='$username' AND Password='$password_hash'"; 
        
        if ($query_run = mysqli_query ($link, $query)) {
            $query_num_rows = mysqli_num_rows ($query_run);
            echo $query_num_rows;
            
            if ($query_num_rows == 0) {
                echo 'Invalid username/password combo';
            }
            else if ($query_num_rows == 1) {
                echo 'OK Bitch!';
                /*$user_id = mysqli_result ($query_run, 0, 'id');
                $_SESSION ['user_id'] = $user_id;
                header ('Location: index.php');*/
            }
        }
        else echo 'bokachoda';
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