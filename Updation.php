<?php
$size = sizeof($_POST);
$records = $size / 7;
for ($i = 1; $i <= $records; $i++) {
    $index1 = "rno" . $i;
    $rno[$i] = $_POST[$index1];
    $index2 = "name" . $i;
    $name[$i] = $_POST[$index2];
    $index3 = "batch" . $i;
    $batch[$i] = $_POST[$index3];
    $index4 = "subject" . $i;
    $subject[$i] = $_POST[$index4];
    $index5 = "age" . $i;
    $age[$i] = $_POST[$index5];
    $index6 = "gender" . $i;
    $gender[$i] = $_POST[$index6];
    $index7 = "amount" . $i;
    $amount[$i] = $_POST[$index7];
}
$con = mysqli_connect('localhost', 'root', '', 'SRM', '3308');
mysqli_select_db($con, 'SRM');
for ($i = 1; $i <= $records; $i++) {
    $q = "update student set Name='$name[$i]',Batch='$batch[$i]',Subject='$subject[$i]',Age=$age[$i],Gender='$gender[$i]',Amount_Paid=$amount[$i] where Roll_number=$rno[$i]";
    $status = mysqli_query($con, $q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status</title>
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
        echo "<h2>Records Updated Successfully!</h2>";
    } else {
        echo "<h2>Records can't be updated!</h2>";
    }
    ?>
    <div id="link-div">
        <a href="View.php">Update More Records?</a>
        <br>
        <a href="View.php">View Records</a>
    </div>
</body>

</html>