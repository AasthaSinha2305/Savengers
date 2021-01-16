

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../../css/seaching.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
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
            <input type="submit" name="search" value="Search">
        </form>
    </center>
</body>
</html>



<?php

$connection = mysqli_connect("sql113.epizy.com","epiz_27697848","KXpHLZ7gObGt1","epiz_27697848_causelist");
$db = mysqli_select_db($connection, "testing");
if(isset($_POST['search'])){
    $id1 = $_POST['date'];
    $id2 = $_POST['caseno'];
    $id3 = $_POST['year'];
    $id4 = $_POST['casetype'];
    $query = "SELECT * FROM checking where YEARREG = '$id3' AND DATECASE = '$id1' AND CASENO = '$id2' AND CASETYPE = '$id4'";
    $query_run = mysqli_query($connection,$query);
    ?>
        <?php
    
    while($row = mysqli_fetch_array($query_run)){
                ?>
        <div class="container">
        <table>
            <tr>
                <th>Serial Number</th>
                <th><?php echo $row['SRNO'] ?></th>
            </tr>
            <tr>
                <th>Case  Number</th>
                <th><?php echo $row['CASENO'] ?></th>
            </tr>
            <tr>
                <th>Date</th>
                <th><?php echo $row['DATECASE'] ?></th>
            </tr>
            <tr>
                <th>Court Number</th>
                <th><?php echo $row['COURTNO'] ?></th>
            </tr>
            <tr>
                <th>Judge Name</th>
                <th><?php echo $row['JUDGENAME'] ?></th>
            </tr>
            <tr>
                <th>Party Number</th>
                <th><?php echo $row['PARTYNAME'] ?></th>
            </tr>
            <tr>
                <th>Respondent Advocate</th>
                <th><?php echo $row['RESADV'] ?></th>
            </tr>
            <tr>
                <th>Respondent AOR Number</th>
                <th><?php echo $row['RESAOR'] ?></th>
            </tr>
            <tr>
                <th>Petitioner Advocate</th>
                <th><?php echo $row['PETADV'] ?></th>
            </tr>
            <tr>
                <th>Petitioner AOR Number</th>
                <th><?php echo $row['PETAOR'] ?></th>
            </tr>
            <tr>
                <th>Time</th>
                <th><?php echo $row['TIME'] ?></th>
            </tr>
            <br>
            
        </table>
        </div>
        <?php
             
    }
}


?>