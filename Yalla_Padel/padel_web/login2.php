<html>
    <head>
    <title> login Form Tutorial in css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
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
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
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
</head>
<body>
    <div class="background">
        
        <div class="shape"></div>    
        <div class="shape"></div>

    </div>
    
    <div>
        <div>
    <form method="post">
        <h3>Login Here</h3>

        <label for="phone">Phone number</label>
        <input type="text" placeholder="Enter Your Phone Number" id="phone"  name="phnum" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password"  name="pass" required>
        <br>
        <div>
         <div class="ykbr">
            
            <a href="signup.html">Create A New Account </a>   
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
    <input type="text" placeholder="Phone Number" name="email" required>

    <label for="psw"><b>Old Password</b></label>
    <input type="password" placeholder="Enter Old Password" id="old pass" name="old pass" required>
    
    <label for="psw"><b>New Password</b></label>
    <input type="password" placeholder="Enter New Password" id="new pass" name="new pass" required>
    <input type="password" placeholder="Confirm Password" id="cnew pass" name="cnew pass"><br>

    <button type="submit" class="btn" name="change">Change</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>    
    </div>
    
    
    <?php
 if(isset($_POST['login']))
 {
             header("location: home.html");
        $phnum=$_POST["phnum"];
        $pass=$_POST["pass"];
        
         $conn= mysqli_connect ("localhost","root","","padel ms");

        $stmt="SELECT * FROM `player` 
               WHERE `phnum`='$phnum' and `pass`='$pass' ";      
        
        
        $result= mysqli_query($conn, $stmt);
        
        
        if($row = mysqli_fetch_array($result))
        {header("location: home.html");
        }
        else{ 
            
          echo '<script type="text/javascript">test();</script>';
        }
}    
?>
    <script>
        function test() {
      alert("user not fount please check the entered phone number or signup if its your first time with us ");
    }
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    </script>
    
</body>
</html>
 