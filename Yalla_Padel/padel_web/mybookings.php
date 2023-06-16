
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
body{
   background-image: url("images/booking2.jpg");
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
    left: 40%;
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
button{
    background-color: transparent;
    border-bottom:2px solid white;
}
.buttonn{
      margin-top: 30px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    bottom: 20px;
    transition:0.7s ease ; 
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
  display:none;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 45%;
    left: 87%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
}
.formm-popup {
  
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 45%;
    left: 60%;
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
.level {
    background-color:transparent;
    
       /* backdrop-filter: blur(10px);*/
    
}
.level option {
    color: black;
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
    left: 23%;
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
    position: relative;
    transform: translate(-50%,-50%);
    font-size: 24;
    top: 55%;
    left: 6%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
}

</style>

    </head>

    <body>
<div class="formm-popup">
                  <!-- <img class="images" src="booking2.jpg">-->

         <form class="viewbooking" action="mybookings.php"  method="post">
             <h3> View My Bookings</h3>
        <input class="inputc" type="text" placeholder="Phone Number" id="fname" name="phnum" required>
        
             <label onclick="openForm()" class="chpass"> Delete Booking</label>

       <input type="submit" name="view" value="View" class="buttonn">  
       
    
    </form>
    
    </div>
   <div class="form-popup" id="myForm">
       <form  style="height:460px;" method="post" class="form-container">
    <h3>Delete Booking</h3>

    
		<label for="court-num">Booking Date</label>
                <input type="date" placeholder="Enter The Date" name="Bookingdate" required>
                <label for="court-num">Booking Time</label>
                <input type="time" placeholder="Enter The Time"  name="Bookingtime" required>
                 <label for="court-num">Court Number</label>
		           <select class="level" name="court"  required> 
             <option value="1">  1 </option>                          
             <option value="2">  2 </option>
             <option value="3">  3 </option>
             <option value="4">  4 </option>
            <option value="5">  5 </option>
             <option value="6">  6 </option>

            
         </select>

    <input type="submit" class="btn" name="delete" value="Delete">
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
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
      alert("yaaay..successfuly Deleted!");
    }
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
 function ph_not_found() {
         alert("Phune Number Not Fount Please Check The Entered Phone Number or Signup if You Haven't ");
}

function book_notexist() {
         alert("hmm.. Booking Not Exist!");
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
     $conn= mysqli_connect("localhost","root","","padel ms");

function selects()
 {
    $phone=$_POST["phnum"];
      
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `player` 
               WHERE `phnum`='$phone'";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
function book()
 {
    $phone=$_POST["phnum"];
      
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `booking` 
               WHERE `phnum`='$phone'";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
function delete()
 {
     $conn= mysqli_connect("localhost","root","","padel ms");
    $bookdate=$_POST["Bookingdate"];
     $booktime=$_POST["Bookingtime"];
    $court=$_POST["court"]; 
        $stmt="SELECT * FROM `booking` 
               WHERE `courtnum`='$court' AND `bookingdate`='$bookdate' AND `Bookingtime`='$booktime' ";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
if(isset($_POST['delete'])) 
{
    
     $bookdate=$_POST["Bookingdate"];
        $booktime=$_POST["Bookingtime"];
$court=$_POST["court"];
          if($row = mysqli_fetch_array(delete()))
          {
               $stmt="DELETE  FROM `booking` 
               WHERE `courtnum`='$court' AND `bookingdate`='$bookdate' AND `Bookingtime`='$booktime' ";
        $resultt= mysqli_query($conn, $stmt);
        
                    
                    echo '<script type="text/javascript">succes();</script>';
                    
              
          }

    else
                            echo '<script type="text/javascript">book_notexist();</script>';

        
    
}
if(isset($_POST['view'])) 
 {
        $phone=$_POST["phnum"];

      $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT player.phnum,player.fname,player.lname,booking.bookingdate,booking.bookingtime,booking.courtnum,booking.slot 
        from player 
        JOIN booking 
        on player.phnum=booking.phnum
        AND player.phnum='$phone'";
        $resultt= mysqli_query($conn, $stmt);
        
        $stmt2="SELECT COUNT(phnum) FROM `booking` 
               WHERE `phnum`='$phone'";
        
         $result2= mysqli_query($conn, $stmt2);
      if($row = mysqli_fetch_array(selects()))
      {
        $row2=mysqli_fetch_array($result2);
         /* $phonenum=$_POST["phnum"];
          $fname = mysql_query($conn,"SELECT fname FROM player WHERE phnum = '$phonenum'");
          $result = mysql_fetch_array($fname);*/
          echo '<table>';
          echo '<tr><th> PHONE NUMBER</th> <th> First Name</th> <th> Last Name</th> <th> Date </th> <th> TIME </th> <th>Court Number </th> <th> Slot </th></tr>';
          while($row1 = mysqli_fetch_array($resultt))
          {
           
          
        
              echo "<tr><td>
               $row1[0]
                </td><td> 
              $row1[1]
               </td><td>
              $row1[2]
               </td><td>
               $row1[3]
               </td><td>
               $row1[4]
               </td><td>
               $row1[5]
                   </td><td>
               $row1[6]
               
               </td></tr>";
               
              
          }
          
          echo '</table>';

                echo "<span>You Have $row2[0] Bookings </span>";

      }
      
        else {
                      echo '<script type="text/javascript">ph_not_found();</script>';

      }    
              
              
              
              
              
 }
?>
    
    </body>
</html>