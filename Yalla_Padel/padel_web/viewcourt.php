
<html>
<head>
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
   background-image: url("images/viewco.jpg");
          background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -20px;
    bottom: -80px;
}
form{
     
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 20%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}

.divbutt{
    display: flex;
    align-items : space-between;
    padding-left: 5px;
    
    
}
.buttonn{
    margin-top: 50px;
    width: 50%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    margin-left: 8px;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
.ykbr{

    transition:0.7s ease ; 
        justify-content:space-between;

}
.ykbr:hover {
                          transform: scale(1.05);
        }
.form-popup {
  
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 45%;
    left: 70%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: rgba(255,255,255,0.13);
    height: 430;

}

/* Full-width input fields */
/* .form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
*/
.images{
    width: 1450px ;
   height: 950;    
}
.form-container .btn {
  background-color: white;
  color: black;
  padding: 16px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  
}

table{
    border-spacing: 10;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 20%;
    left: 20%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
}
.form-container .btn:hover, .open-button:hover {
 
}
span{
    margin-top: 10;
     background-color: rgba(255,255,255,0.13);
     font-size: 24;
     color: white;
    position: relative;
    transform: translate(-50%,-50%);
    top: 73%;
    left: 58%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
}

</style>

    </head>
    
    <body>
<div class="form-popup">
                  

         <form class="viewbooking" action="viewcourt.php"  method="post">
             <h3>Court Bookings</h3>
       
             <input class="inputc" type="text" placeholder="Court Number" id="fname" name="court" required>
             <div class="divbutt">
       <input type="submit" name="view" value="View" class="buttonn">  
              <input type="submit" name="gained" value="Gained Money" class="buttonn">  

             </div>
    
    </form>
</div>
            
            
            <script>
        function navigate() {
  location.replace("http://localhost/padel_web/login.php");
}
        function invalid() {
      alert("oops.. something went wrong!");
    }
    function succes() {
      alert("yaaay..successfuly updated!");
    }
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
 function court_not_found() {
         alert("Court Not Exist!.. You Have Only 6 Courts");
}
function court_not_B() {
         alert("Court Not Booked Yet");
}
function ph_exist() {
         alert("hmm.. Phone number already exist!");
}
function passwordConfirmationerror() 
{
    alert("Please make sure your passwords match.");

}
    </script>
    

<?php
      $conn= mysqli_connect ("localhost","root","","padel ms");
function selects()
 {
    $court=$_POST["court"];
      
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `court` 
               WHERE `courtnum`='$court'";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
function book()
 {
    $court=$_POST["court"];
      
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `booking` 
               WHERE `courtnum`='$court'";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
if(isset($_POST['gained'])) 
{
     $court=$_POST["court"];

     $stmt2="SELECT SUM(booking.slot)*SUM(court.court_fees_per_hour) 
                from booking
                JOIN court 
                on court.courtnum=booking.courtnum
                and court.courtnum='$court'";
     
     $result2= mysqli_query($conn, $stmt2);
     
      if($row = mysqli_fetch_array(selects()))
      {
      if($row = mysqli_fetch_array(book()))
      {
                $row2=mysqli_fetch_array($result2);
                
                
          echo "<span>This Court Gained $row2[0] L.E Since We Started </span>";
      }
      
     else
                                 echo '<script type="text/javascript">court_not_B();</script>';
      }
      else
                                echo '<script type="text/javascript">court_not_found();</script>';
}

if(isset($_POST['view'])) 
 {
       
 $court=$_POST["court"];

        $stmt="SELECT booking.slot,booking.bookingdate,booking.Bookingtime,court.courtnum,court.court_fees_per_hour
            from booking
            JOIN court 
            on court.courtnum=booking.courtnum
            and court.courtnum='$court'";
        $result1= mysqli_query($conn, $stmt);
        
       
        
          if($row = mysqli_fetch_array(selects()))
      {
      if($row = mysqli_fetch_array(book()))
      {
       
          echo '<table>';
          echo '<tr><th> SLOT </th> <th> BOOKING-DATE</th><th> BOOKING-TIME</th>  <th> FEES/HOUR </th></tr>';
          while($row1 = mysqli_fetch_array($result1))
          {
           
          
        
              echo "<tr><td>
               $row1[0]
                </td><td> 
              $row1[1]
               </td><td>
               $row1[2]</td><td>

               $row1[4]
               
               </td></tr>";
               
              
          }
          
          echo '</table>';

               // echo "<span>You Have $row2[0] Bookings </span>";

      }
      
        else 
                      echo '<script type="text/javascript">court_not_B();</script>';

         
      }    
              
            else
                                echo '<script type="text/javascript">court_not_found();</script>';    
              
              
 }
?>
    
    </body>
</html><?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

