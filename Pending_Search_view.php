<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:http://localhost/SRM/Login.php");
}
$search = $_POST['search'];
$con = mysqli_connect('localhost', 'root', '', 'SRM', '3308');
mysqli_select_db($con, 'SRM');
$q = "select * from student where Roll_Number=$search and Fee_Status='Due'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link rel="stylesheet" type="text/css" href="View_Style.css" />
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
    if ($num == 1) {
    ?>
        <table id="view-table">
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Batch</th>
                <th>Subject</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Total Fees</th>
                <th>Amount Paid</th>
                <th>Pending Amount</th>
                <th>Fee Status</th>
            </tr>
            <?php
            $row = mysqli_fetch_array($result);
            ?>
            <tr>
                <td><?php echo $row['Roll_number']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Batch']; ?></td>
                <td><?php echo $row['Subject']; ?></td>
                <td><?php echo $row['Age']; ?></td>
                <td><?php echo $row['Gender']; ?></td>
                <td><?php echo $row['Total_Fees']; ?></td>
                <td id="paid_amt"><?php echo $row['Amount_Paid']; ?></td>
                <td id="pend_amt"><?php echo $row['Pending_Amount']; ?></td>
                <td><?php echo $row['Fee_Status']; ?></td>
            </tr>
        <?php
    } else {
        echo "<h2>Roll number doesn't exist</h2>";
        ?>
            <div id="link-div">
                <a href="Pending_Fees.php">Search Again?</a>
            </div>
        <?php
    }
        ?>
</body>

</html>