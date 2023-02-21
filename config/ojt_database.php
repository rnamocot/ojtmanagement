<?php
function connectionDB(){  
    $host="localhost";
    $username="root";
    $password="";
    $database="teacher_ojt_system";
    $con =new mysqli($host, $username,$password, $database );
    if($con->connect_error){
       echo $con->connect_error;
    }else{
        return $con;
    }
}