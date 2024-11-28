<?php

$username = "John1$";
$username_pattern = "/^[a-zA-Z\d\W]{5,10}$/";

if (preg_match($username_pattern,$username)){
    echo "Valid username";
} else{
    echo "Invalid username";
}

?>