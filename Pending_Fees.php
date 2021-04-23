<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:http://localhost/SRM/Login.php');
}
$con = mysqli_connect('localhost', 'root', '', 'SRM', '3306');
mysqli_select_db($con, 'SRM');
$q = "select * from student where Fee_Status='Due' order by Roll_number";
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
    <div id="search-div">
        <form action="Pending_Search_view.php" method="POST">
            <input id="search_bar" type="search" placeholder="Enter the Roll Number" name="search" />
            <input id="search_btn" type="submit" value="Search" />
        </form>
    </div>
    <table id="view-table">
        <br />
        <br />
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
        <tr>
            <?php
            for ($i = 1; $i <= $num; $i++) {
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
            }
    ?>
    </tr>
    </table>
</body>

</html>