<?php

$ic = "241008-14-5860";
    $ic_pattern = "/^\d{2}(0([1-9]|[012])(|)-\d{2}-\d{4}$/";
//$ic_pattern = "/^\d{6}-\d{2}-\d{4}$/";

if (preg_match($ic_pattern,$ic)){
    echo "Valid IC";
} else{
    echo "Invalid IC";
}

?>