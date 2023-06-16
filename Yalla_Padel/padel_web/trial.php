<?php

$phone=$_POST["phnum"];
        $pass=$_POST["pass"];
        
        $conn= mysqli_connect ("localhost","root","","padel ms");
        if($conn==true)
            echo 'connect';
        else 
            echo 'neeeeee';
       /* $stmt="SELECT * FROM `player` 
               WHERE `phnum`='$phone' and `pass`='$pass' ";
                
        $result= mysqli_query($conn, $stmt);
        
        if($row = mysqli_fetch_array($result))
        {
           echo '<script type="text/javascript">test();</script>';
        }
        else{ 
            
        echo '<script type="text/javascript">test();</script>';
        }
        
       */ 
        
 ?>