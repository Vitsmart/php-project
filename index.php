
<?php
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD);
if ($con){
    echo "Connection successful by Vitalis";
}
else{
    die(mysqli_error($con));
}
?>