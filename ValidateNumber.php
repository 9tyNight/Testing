<?php

$mobile = "015-9468221";
//$mobile_pattern = "/^\d{3}-\d{7,8}$/";
$mobile_pattern = "/^01[0123456789]-\d{7,8}$/";

if (preg_match($mobile_pattern,$mobile)){
    echo "Valid Mobile Number";
} else{
    echo "Invalid Mobile Number";
}

?>