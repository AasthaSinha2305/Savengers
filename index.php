<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
    <title>Document</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image: url('https://www.wkms.org/sites/wkms/files/styles/medium/public/201711/justice_ikiryo_123rf_0.jpg');
  background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  z-index: 1; /* Sit on top */
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 100px;
  
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
label{
  color:#FFFFFF;
}
h1{
  color:white;
  text-align: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>
</head>
<body>
<form  method="post" >
<h1>Court Easy Access</h1>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button name= "search" type="search"><b>LOGIN</b></button>
    </div>
    <button onclick="location.href = 'index2.html'" style=" margin-right: 10px; background-color: rgb(189, 15, 15);  height:40px; color: white; width:200px; float:right"><b>SKIP LOGIN</b></button>
  </form>

  
</body>
</html>


<?php

$connection = mysqli_connect("localhost:3307", "root", "");
$db = mysqli_select_db($connection, "testing");
if(isset($_POST['search'])){
  $id1 = $_POST['uname'];
  $id2 = $_POST['psw'];
  $query = "SELECT * FROM logindata where USERNAME = '$id1' AND PASWORD = '$id2'";
  $query_run = mysqli_query($connection,$query);
  ?>
  <?php

while($row = mysqli_fetch_array($query_run)){
  if(mysqli_num_rows($query_run)==1){
    ?>
    <script>
      location.assign("index2.html");
    </script>
    <?php
  }
  else{
    echo "invalid input";
  }
       
}

  
}

?>