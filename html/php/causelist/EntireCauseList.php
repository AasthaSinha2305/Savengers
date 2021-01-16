

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css?v=<?php echo time(); ?>"/>
    <link href="../../../css/seaching.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    
</head>

<body>
    <center>
    <h3>Entire Cause list</h3>
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
    $query = "SELECT * FROM checking where DATECASE = '$id1'";
    $query_run = mysqli_query($connection,$query);
    ?>
      <div class="container">
        <table>
        <tr>
        <th>Date</th>
        <th>Court No</th>
        <th>Case Number</th>
        <th>Judge Name</th>
        <th>Respondent Advocate</th>
        <th>Petetioner Advocate</th>
        <th>Time</th>
      </tr>
        </table>
        </div>
 
        <?php
    
    while($row = mysqli_fetch_array($query_run)){
                ?>
        <div class="container">
        <table>
        <tbody>
        <tr>
        <th><?php echo $row['DATECASE'] ?></th>
        <th><?php echo $row['CASENO'] ?></th>
        <th><?php echo $row['JUDGENAME'] ?></th>
        <th><?php echo $row['RESADV'] ?></th>
        <th><?php echo $row['PETADV'] ?></th>
        <th><?php echo $row['PETADV'] ?></th>
        <th><?php echo $row['TIME'] ?></th>
      </tr>
        </tbody>
        </table>
        </div>
        <?php
             
    }
}


?>
