
<html lang="en">
<head>
    <title>Sign Up</title>
 <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
h3{
    margin-top: 370px;
    
    
}
body{
   
   background-image: url("images/signupp.jpg");
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
.inputc{
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
/*button{
    background-color: transparent;
    border-bottom:2px solid white;
}*/
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
        transition:0.7s ease ; 

}


.ykbr{

    transition:0.7s ease ; 
        justify-content:space-between;

}
.level {
    background-color:transparent;
    
       /* backdrop-filter: blur(10px);*/
    
}
.level option {
    color: black;
}

.buttonn:hover {
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
    height: 630;

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


.form-container .btn:hover, .open-button:hover {
 
}

/*
.chpass{
    display: flex;
    align-content: center;
    border-bottom: 2px solid white;
    
}
.chpass:hover{
    cursor: pointer;
}*/
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
    
   
</head>
<body>
   
   
    <form  action="signup.php" method="post">
        
        <h3>Sign Up Here</h3>

        
        <label for="fname">First Name</label>
        <input class="inputc" type="text" placeholder="First Name" id="fname" name="fname" required>
       
        
       
         <label for="lname">Last Name</label>
         <input class="inputc" type="text" placeholder="Last Name" id="lname" name="lname" required >
        
         
         <label for="phnum">Phone Number</label>
         <input class="inputc" type="number" placeholder="Phone Number" id="phnum" name="phnum" required>
        
        <label for="date">Date Of Birth</label>
        <input class="inputc" type="date" placeholder="DOB" id="dob" name="dob" required>
        
       <br>
       
       <P for="male">Male</p>
        <input  type="radio" id="gen" name="gen" value="male" required>
        <label for="female">Female</label>
        <input  type="radio" id="gen" name="gen" value="female" required>
       
        
        <label for="email">E-mail</label>
        <input class="inputc" type="email" placeholder="address" id="email" name="email" required>
         <label for="level">Level</label>
        
         <select class="level" name="level"  required> 
             <option value="C1"> C 1 </option>                          
             <option value="C2"> C 2 </option>
             <option value="C3"> C 3 </option>
             <option value="B3.5"> B 3.5 </option>
             <option value="B4"> B 4 </option>
             <option value="B4.5"> B 4.5 </option>
             <option value="B5"> B 5 </option>
         </select>


       <br> <label for="password">Password</label>
        <input class="inputc" type="password" placeholder="Password" id="password" name="pass" required>
        <input class="inputc" type="password" placeholder="Confirm Password" id="password" name="cpass" required>
        
        <input type="submit" name="signup" value="Sign Up" class="buttonn">   
    </form>
    
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
 function ph_not_found() {
         alert("user not fount please check the entered phone number or signup if its your first time with us ");
}
function ph_exist() {
         alert("hmm.. Phone Number Already Exist!");
}
function passwordConfirmationerror() 
{
    alert("Please make sure your passwords match.");

}
    </script>

</body>

</html>

 <?php
 
 function selects()
 {
    $phone=$_POST["phnum"];
      
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `player` 
               WHERE `phnum`='$phone'";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
 
 

 if(isset($_POST['signup'])) 
 {
     $npass=$_POST["pass"];
     $ncpass=$_POST["cpass"];
      if($row = mysqli_fetch_array(selects()))
              echo '<script type="text/javascript">ph_exist();</script>';
           elseif ($npass!=$ncpass)
               echo '<script type="text/javascript">passwordConfirmationerror();</script>'; 
      else
      {
     $fname=$_POST["fname"];
$lname=$_POST["lname"];
$phnum=$_POST["phnum"];
$dob=$_POST["dob"];
$gen=$_POST["gen"];
$email=$_POST["email"];
$level=$_POST["level"];
$pass=$_POST["pass"];
$type='player';
$conn= mysqli_connect("localhost","root","","padel ms");
        
$stmt1="INSERT INTO `person`
            (`fname`,`lname`,`phnum`,`DOB`,`gender`,`type`)
            VALUES ('$fname','$lname','$phnum','$dob','$gen','$type')";

        $stmt2="INSERT INTO `player`
            (`fname`,`lname`,`phnum`,`DOB`,`gender`,`email`,`pass`,`level`)
            VALUES ('$fname','$lname','$phnum','$dob','$gen','$email','$pass','$level')";
        
        $result1= mysqli_query($conn, $stmt1);
        $result2= mysqli_query($conn, $stmt2);

        if($result1==true && $result2==true)
             echo '<script type="text/javascript">navigate();</script>';
        else
            echo '<script type="text/javascript">invalid();</script>';
       
      }
 }
?>
   



