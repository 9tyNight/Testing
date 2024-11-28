<?php

$year = "2022-09-15";
$year_pattern = "/^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/";

if (preg_match($year_pattern,$year)){
    echo "Valid Year";
} else{
    echo "Invalid Year";
}

?>