<?php

require 'core.inc.php';
require 'connect.inc.php';

if (loggedin()) {
    if (strcmp("SM", $_SESSION['user_id']) == -4) {
        header("Location: dataentry.php");
    }
    else    header ("Location: dashboard.php");
}
else {
    include 'loginform.inc.php';
}

?>