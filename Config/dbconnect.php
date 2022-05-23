<?php 
session_start(); 


  
    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="bukunmi";
    
    
    $conn=new mysqli($servername,$username,$dbpassword,$dbname);
    
    if($conn->connect_error){
           die("failed to connect to database".$conn->connect_error) ;
           }
    
    ?>