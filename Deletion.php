<?php
session_start();
$size = sizeof($_POST);
$j = 1;
$status = 0;
for ($i = 1; $i <= $size; $i++, $j++) {
    $index = "r" . $j;
    if (isset($_POST[$index])) {
        $rno[$i] = $_POST[$index];
    } else {
        $i--;
    }
}
$con = mysqli_connect('localhost', 'root', '', 'SRM', '3306');
mysqli_select_db($con, 'SRM');
for ($k = 1; $k <= $size; $k++) {
    $q = "delete from student where Roll_number=" . $rno[$k];
    $status = mysqli_query($con, $q);
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Status</title>
    <link rel="stylesheet" href="operation_status.css">
    <link rel="stylesheet" href="navigation_style.css">

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
        echo '<h2>Record Deleted Successfully...!</h2>';
    } else {
        echo "<h2>Record can't be deleted</h2>";
    }
    ?>
    <div id="link-div">
        <a href="Delete.php">Delete More Records?</a>
        <br>
        <a href="View.php">View Records</a>
    </div>
</body>

</html>