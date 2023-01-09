<?php
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="phpdatabase";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
    echo "success";
}
else{
    die(mysqli_error($con));
}

?>