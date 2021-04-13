<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:http://localhost/SRM/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Home_Style.css">
</head>

<body>
    <h1>Student Record Management</h1>
    <h3><?php echo "Welcome " . $_SESSION['username']; ?></h3>
    <div class="log-box">
        <h1>Main Menu</h1>
        <a href="Insert.php" id="i1" class="mcontent"> 1.Insert Records</a>
        <br /><a href="Delete.php" id="i2" class="mcontent"> 2.Delete Records</a>
        <br /><a href="Update.php" id="i3" class="mcontent"> 3.Udate Records</a>
        <br /><a href="View.php" id="i4" class="mcontent">4.View Records</a>
        <br /><a href="Pending_Fees.php" id="i5" class="mcontent">5.Pending Fees</a>
    </div>
</body>
</html>