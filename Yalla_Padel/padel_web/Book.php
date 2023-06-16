<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title> Book Here</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    

   background-image: url("images/book4.jpg");
          background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;


    background-color: #080710;
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
    right: -30px;
    bottom: -80px;
}
form{
    height: 540px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 80%;
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
.buttonn{
    margin-top: 50px;
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
.buttonn:hover {
                          transform: scale(1.05);
        }
.right{
    margin-top: 10px;
text-align: right;
    transition:0.7s ease ; 
        justify-content:space-between;

}
.right:hover {
                          transform: scale(1.05);
        }
        .level {
    background-color:transparent;
    
       /* backdrop-filter: blur(10px);*/
    
}
.level option {
    color: black;
}

    </style>
</head>
<body>
   
    <form style="height: 680px" action="Book.php" method="post">
        <h3>Book Here</h3>

        <label for="phone">Phone number</label>
        <input type="text" placeholder="Enter Your Phone Number" id="phone"  name="phnum" required>

        <label for="court-num">Court Number</label>
		           <select class="level" name="court"  required> 
             <option value="1">  1 </option>                          
             <option value="2">  2 </option>
             <option value="3">  3 </option>
             <option value="4">  4 </option>
            <option value="5">  5 </option>
             <option value="6">  6 </option>

            
         </select>
	     <label >Slot</label>
		        <select class="level" name="slot"  required> 
             <option value="1">  1 </option>                          
             <option value="2">  2 </option>
             <option value="3">  3 </option>
             <option value="4">  4 </option>
            
         </select>
		
		<label for="court-num">Booking Date</label>
                <input type="date" placeholder="Enter The Date" name="Bookingdate" required>
                <label for="court-num">Booking Time</label>
                <input type="time" placeholder="Enter The Time"  name="Bookingtime" required>

        <br>
        
        <input style="position:relative; bottom: 30px;" type="submit" name="book" value="Book" class="buttonn">   

        
    </form>
    <script>
        function navigate() {
  location.replace("http://localhost/padel_web/home.php");
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
 function ph_not_found() {
         alert("Sorry...Phone Number Not Found please check the entered phone number or signup if its your first time with us!");
}
function book_exist() {
         alert("hmm.. Booking Already Exist!");
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
               WHERE `phnum`='$phone' ";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
 function book()
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
 
 

 if(isset($_POST['book'])) 
 {
     $bookdate=$_POST["Bookingdate"];
        $booktime=$_POST["Bookingtime"];
$court=$_POST["court"];
$phnum=$_POST["phnum"];
$slot=$_POST["slot"];
if($row = mysqli_fetch_array(selects()))
{
      if($row = mysqli_fetch_array(book()))
              echo '<script type="text/javascript">book_exist();</script>';
            
      else
      {

        
$stmt1="INSERT INTO `booking`
            (`phnum`,`courtnum`,`slot`,`bookingdate`,`Bookingtime`)
            VALUES ('$phnum','$court','$slot','$bookdate','$booktime')";

       
        $result1= mysqli_query($conn, $stmt1);
        

        if($result1==true)
             echo '<script type="text/javascript">navigate();</script>';
        else
            echo '<script type="text/javascript">invalid();</script>';
       
      }
 }
 else
     echo '<script type="text/javascript">ph_not_found();</script>';
 }
?>
</body>
</html>


