<?php 
$server="localhost";
$username="root";
$password="";
$database="p-discuss";

$conn= mysqli_connect($server,$username,$password,$database);



if($conn){
    // echo "connection succesfull";
}
else{
    echo "connection Unsuccesfull";
}

?>