<?php
$rno = $_POST['rno'];
$name = $_POST['name'];
$batch = $_POST['batch'];
$subject = $_POST['subject'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$amount = $_POST['amount'];
if ($subject == "C") {
    $tf = 1000;
} else if ($subject == "C++") {
    $tf = 1500;
} else if ($subject == "Java") {
    $tf = 2000;
} else if ($subject == "Python") {
    $tf = 3000;
} else if ($subject == "PHP") {
    $tf = 2500;
}
if ((($amount == 1000) && ($subject == "C")) || (($amount == 1500) && ($subject == "C++")) || (($amount == 2000) && ($subject == "Java")) || (($amount == 2500) && ($subject == "PHP")) || (($amount == 3000) && ($subject == "Python"))) {
    $fs = "Paid";
} else {
    $fs = "Due";
}
$pa = $tf - $amount;

$con = mysqli_connect('localhost', 'root', '', 'SRM', '3306');
mysqli_select_db($con, 'SRM');
$q = "insert into student values($rno,'$name','$batch','$subject',$age,'$gender',$tf,$amount,$pa,'$fs')";
$status = mysqli_query($con, $q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Status</title>
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
        echo "<h2>Record inserted successfully!</h2>";
    } else {
        echo "<h2>Record can't be inserted!</h2>";
    }
    ?>
    <div id="link-div">
        <a href="Insert.php">Insert more records?</a>
        <br />
        <a href="View.php">View Records</a>
    </div>
</body>

</html>