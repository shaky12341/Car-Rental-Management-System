<?php

//addcart.php

include('../include/Sessions.php');
require_once('../include/functions.php');
if (isset($_POST["action"])) {
    $check = "DELETE FROM cart WHERE user_id='$_POST[user]';";
    $exe = Query($check);

    echo "true";
}
