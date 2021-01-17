

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../../css/seaching.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
     
    input[type=text], input[type=date]{
    width:20%;
    padding:7px 10px;
    margin: 10px 0;
    display:inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }
     
    button{
    background-color:#4CAF50;
    padding: 9px 5px;
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
 
 
</style>
</head>

<body>
    <div class="header"><img src="https://www.ritiriwaz.com/wp-content/uploads/2017/01/Indian-Emblem.jpg" alt="National Embelem" height="100px" width="100px" align="middle">
</div> 
    <center>
    <h3>Case Number Wise</h3>
        <form action="" method="POST">
        <label>Date</label><br>
        <select name="date" id="cars">
            <option value="">None</option>
            <option value="2021-01-04">2021-01-04</option>
            <option value="2021-01-03">2021-01-03</option>
            <option value="2021-01-02">2021-01-02</option>
            <option value="2021-01-01">2021-01-01</option>
        </select>
        <br><br>
        <label>Case Nature</label><br>
        <select name="casetype" id="cars">
            <option value="">None</option>
            <option value="CR MISC">CR. MISC</option>
            <option value="CWJC">CWJC</option>
            <option value="CR REV">CR REV</option>
            <option value="CR APPEAL">CR APPEAL</option>
        </select>
        <br><br>
            <label>Case Number</label><br>
            <input name = "caseno" type="text " placeholder="serial number"/> <br>
            <label>Year</label><br>
            <input name = "year" type="text " placeholder="serial number"/> <br>
            <button type="submit" name="search" value="Search">SEARCH</button>
            
        </form>
    </center>
</body>
</html>



<?php

$connection = mysqli_connect("sql113.epizy.com","epiz_27697848","KXpHLZ7gObGt1","epiz_27697848_causelist");
$db = mysqli_select_db($connection, "testing");
if(isset($_POST['search'])){
    $id1 = $_POST['casetype'];
    $id2 = $_POST['caseno'];
    $id3 = $_POST['year'];
    $query = "SELECT * FROM orders where CASETYPE = '$id1' AND CASENO = '$id2' AND YEARREG = '$id3'";
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
                <th>advocate aor</th>
                <th><?php echo $row['PETAOR'] ?></th>
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