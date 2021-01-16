<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../../css/seaching.css?php echo time(); ?>" rel="stylesheet" type="text/css" />
<title>Order List </title>
<style>
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 50px 50px;
  text-align: center;
  }
  body{
    margin: 0px;
    padding: 0px;
    text-align:center;
    width: 100%;
    background-color: #e6e6fae8;
    }
     
    input[type=text], input[type=number]{
    width:20%;
    padding:7px 10px;
    margin: 10px 0;
    display:inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

    }
     
    button{
    background-color:#4CAF50;
    width: 10%;
    padding: 9px 5px;
    margin:10px 0px 0px 35px;
    cursor:pointer;
    border:none;
    color:#ffffff;
    font-size: 15px;
    font-weight: bold;
    }
     
    button:hover{
    opacity:0.8;
    }
     
    #un,#ps{
    font-family:'Lato', sans-serif;
    color: gray;
    }
 
 
    #container{
        top:0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width:600;
        height: 200px;
        text-align: center;
    }
</style>
</head>
<body>
  
<div class="header"><img src="https://www.ritiriwaz.com/wp-content/uploads/2017/01/Indian-Emblem.jpg" alt="National Embelem" height="100px" width="100px" align="middle">
</div>  
   <div id="container">
<form action="" method="post" id="flogin">
 
<div class="border-box">
<h2>Search by Petitioner's Advocate Name</h2>
<label  for="Name" id="name">PETITIONER'S ADVOCATE NAME:</label>
<input name = "petadv" type="text"><br/>
 
<label  for="number" id="number"> YEAR: </label>
<input name = "year" type="number"><br/>

<button name = "search" type="submit" value="Search"  id="search">Search</button>
 
</div>
 
</form>
</div>
</body>
</html>

<?php
$connection = mysqli_connect("sql113.epizy.com","epiz_27697848","KXpHLZ7gObGt1","epiz_27697848_orders");
$db = mysqli_select_db($connection, "testing");
if(isset($_POST['search'])){
    $id1 = $_POST['petadv'];
    $id2 = $_POST['year'];
    $query = "SELECT * FROM orders where PETADV = '$id1' AND YEARREG = '$id2'";
    $query_run = mysqli_query($connection,$query);
    ?>
        <?php
    
    while($row = mysqli_fetch_array($query_run)){
                ?>
        <div class="container" style="width: 80%;">
        <table>
            <tr>
                <th>case number</th>
                <th><?php echo $row['CASENO'] ?></th>
            </tr>
            <tr>
                <th>judge name</th>
                <th><?php echo $row['JUDGENAME'] ?></th>
            </tr>
            <tr>
                <th>case type</th>
                <th><?php echo $row['CASETYPE'] ?></th>
            </tr>
            <tr>
                <th>year</th>
                <th><?php echo $row['YEARREG'] ?></th>
            </tr>
            <tr>
                <th>petitioner name</th>
                <th><?php echo $row['PETNAME'] ?></th>
            </tr>
            <tr>
                <th>pet advocate</th>
                <th><?php echo $row['PETADV'] ?></th>
            </tr>
            <tr>
                <th>order date</th>
                <th><?php echo $row['ORDER DATE'] ?></th>
            </tr>
            <tr>
                <th>order pdf</th>
                <th><a href="<?php echo $row['PDF'] ?>">pdf</a></th>
            </tr>
            <br>
            
        </table>
        </div>
        <?php
             
    }
}


?>