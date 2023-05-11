<?php
        
          
            $user='root';
            $password = '';
            $db='kia_website';

            $conn = mysqli_connect('127.0.0.1:3306',$user,$password,$db) or die ("Unable to connect" . mysqli_connect_error()) ;
            $conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
            

?>