

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
    <h3>Judge Name Wise</h3>
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
        <label>Judge Name</label><br>
        <select name="judge" id="cars">
            <option value="">The Chief justice</option>
            <option value="Mr. Justice Aastha">Mr. Justice Aastha</option>
            <option value="Mr. Justice Aakash">Mr. Justice Aakash</option>
            <option value="Mr. Justice Anand">Mr. Justice Anand</option>
            <option value="Mr. Justice Anamika">Mr. Justice Anamika</option>
        </select>
        <br><br>
            <input type="submit" name="search" value="Search">
        </form>
    </center>
</body>
</html>

