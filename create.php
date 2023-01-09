
<?php
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD);
if ($con){
    //echo "Connection successful by Vitalis";
    $sql="create database `phpdatabase`";
    $queryexecute=mysqli_query($con,$sql);
    if($queryexecute){
        echo "Successfully created database";
    }else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}

?>