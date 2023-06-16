
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
   
   background-image: url("images/loginn.jpg");
          background-repeat: no-repeat;
    background-attachment: fixed;
   
    background-color: #080710;
        background-color: #080710;
         height: 400px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
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

form{
    height: 540px;
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
    color: white;
}
button{
    background-color: transparent;
    border-bottom:2px solid white;
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

.buttonn:hover {
                          transform: scale(1.05);
        }
.form-popup {
    display:none;
   
    position: absolute;
    transform: translate(-50%,-50%);
    top: 48%;
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
.error{
    color: red;
    display: none;
    
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
</head>
<body>
    
    
    <div>
        <div>
    <form method="post">
        <h3>Login Here</h3>

        <label for="phone">Phone number</label>
        <input type="text" placeholder="Enter Your Phone Number" id="phone"  name="phnum" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password"  name="pass" required>
        <span class="error" id="errormess" > * user not exist</span>
        <br>
        <div>
         <div class="ykbr">
            
            <a href="signup.php">Create A New Account </a>   
         </div>
             
            <div class="ykbr">  
                <label onclick="openForm()" class="chpass"> Change My Password</label>
            </div> 
            
        </div>
                <input type="submit" name="login" value="Log In" class="buttonn"> 
        
    </form>
    </div>
    
   <div class="form-popup" id="myForm">
  <form method="post" class="form-container">
    <h3>Change My Password</h3>

    <label for="email"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="chphnum" required>
    <span class="error">* phone number not exist </span>
    <label for="psw"><b>Old Password</b></label>
    <input type="password" placeholder="Enter Old Password" id="old pass" name="oldpass" required>
    
    <label for="psw"><b>New Password</b></label>
    <input type="password" placeholder="Enter New Password" id="newpassid" name="newpass" required>
    <input type="password" placeholder="Confirm Password" id="cnewpassid" name="cnewpass" required><br>

    <input type="submit" class="btn" name="change" value="Change">
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>    
    </div>
    <script>
        function navigate() {
  location.replace("http://localhost/padel_web/home.php");
}
        function test() {
      alert("Phune Number Not Fount Please Check The Entered Phone Number or Signup if You Haven't");
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
  document.getElementById("errormess").style.display="block";
}
function passwordConfirmationerror() 
{
    alert("Please make sure your passwords match.");

}
    </script>
  <?php
 function selects()
 {
    $phone=$_POST["phnum"];
        $pass=$_POST["pass"];
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `player` 
               WHERE `phnum`='$phone' and `pass`='$pass' ";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
 function selectschange()
 {
    $nphone=$_POST["chphnum"];
    $opass=$_POST["oldpass"];
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `player` 
               WHERE `phnum`='$nphone' and `pass`='$opass' ";
        $resultt= mysqli_query($conn, $stmt);
        return $resultt;
 }
 
 
 if(isset($_POST['login']))
 {
        /*$phone=$_POST["phnum"];
        $pass=$_POST["pass"];
        $conn= mysqli_connect ("localhost","root","","padel ms");
        $stmt="SELECT * FROM `player` 
               WHERE `phnum`='$phone' and `pass`='$pass' ";
        $resultt= mysqli_query($conn, $stmt);*/
     
        if($row = mysqli_fetch_array(selects()))
        {
         echo '<script type="text/javascript">navigate();</script>';
        }
        else{ 
         
        //echo '<scipt>ph_not_found()</script>';       
        echo '<script type="text/javascript">test();</script>';

        }
 }           
        
if(isset($_POST['change'])) 
 {
    if($row = mysqli_fetch_array(selectschange()))
    {
              $npass=$_POST["newpass"];       
              $nnphone=$_POST["chphnum"];
                $ncpass=$_POST["cnewpass"];
                if($npass!=$ncpass)
                    echo '<script type="text/javascript">passwordConfirmationerror();</script>';
                else
                {
                    
                    $conn= mysqli_connect ("localhost","root","","padel ms");
                    $stmt="UPDATE `player` 
                            SET `pass`='$npass'  WHERE `phnum`='$nnphone'";
                    $result3= mysqli_query($conn, $stmt);
                    
                    echo '<script type="text/javascript">succes();</script>';
                    
                }
  
    }
    else
    {
       echo '<script type="text/javascript">test();</script>';
    }
 }   
           
?>   
</body>
</html>



