<?php

$link = mysqli_connect("localhost", "root", "","hth");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>