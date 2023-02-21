<?php
function connectionDB(){  
    $host="u992206180_ojt";
    $username="root";
    $password="ojt_management123!";
    $database="u992206180_ojt_management";
    $con =new mysqli($host, $username,$password, $database );
    if($con->connect_error){
       echo $con->connect_error;
    }else{
        return $con;
    }
}
