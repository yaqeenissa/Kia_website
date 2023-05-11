<?php
    
                
               class Database
               {
                 
                   private $servername = '127.0.0.1:3306';
                   private $username = "root";
                   private $password = '';
                   private $db ="kia_website";
                   // Create connection
                   function connect()
                   {
                      $conn = new mysqli($this->servername,$this->username,$this->password,$this->db);
                       return $conn;
                   }
                   function read($query)
                   {
                     $connt = $this->connect();
                     $result = mysqli_query($connt,$query);
               
                     if(!$result){
                       return false;
                     }else{
                       $data = false;
                       while($row = mysqli_fetch_assoc($result))
                       {
                         $data[] = $row;
                       }
                     }
                     return $data;
                   }
               
                   function save($query)
                   {
                     $connt = $this->connect();
                     $result = mysqli_query($connt,$query);
               
                     if(!$result){
                       return false;
                     }else{
                       return true;
                     }
                   }
               
               }
               
               ?>
