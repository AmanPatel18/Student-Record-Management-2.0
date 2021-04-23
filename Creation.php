<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root', '', 'SRM', '3306');
mysqli_select_db($con, 'SRM');
$hash = password_hash($password, PASSWORD_DEFAULT);
$q = "insert into user values('$username','$hash')";
$status = mysqli_query($con, $q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Status</title>
    <link type="text/css" href="navigation_style.css" rel="stylesheet" />
    <link rel="stylesheet" href="operation_status.css">

</head>

<body>
    <h1 style="text-align:center;">Student Record Management</h1>

    <div class="nav">
        <a href="Home.php">Home</a>
        <a href="Insert.php">Insert Records</a>
        <a href="Delete.php">Delete Records</a>
        <a href="Update.php">Update Records</a>
        <a href="View.php">View Records</a>
        <a href="Pending_Fees.php">Pending Fees</a>

    </div>

    <?php
    if ($status == 1) {
        echo "<h2>Account Created Successfully!</h2>";
    } else {
        echo "<h2>Account can't be created!</h2>";
    }
    ?>
  <div id="link-div">
        <a href="Login.php">Back to login?</a>
    </div>
</body>

</html>