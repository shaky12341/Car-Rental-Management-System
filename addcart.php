<?php

//addcart.php

include('include/Sessions.php');
require_once('include/functions.php');
if (isset($_POST["action"])) {
    $check = "SELECT * FROM cart where user_id='$_POST[user]' AND item_id='$_POST[prod]'";
    $exe = Query($check);
    if (mysqli_num_rows($exe) > 0) {
        $sql = "UPDATE cart SET quant = '$_POST[val]' WHERE user_id='$_POST[user]' AND item_id='$_POST[prod]'";
        $exec = Query($sql);
        if ($exec) {
            echo "true";
        } else {
            echo "false";
        }
    } else {
        $sql = "INSERT INTO cart (user_id, item_id,quant) VALUES('$_POST[user]', '$_POST[prod]','$_POST[val]')";
        $exec = Query($sql);
        if ($exec) {
            echo "true";
        } else {
            echo "false";
        }
    }
}
