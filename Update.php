<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:http://localhost/BRM/Login_Page.php');
}
$con = mysqli_connect('localhost', 'root', '', 'SRM', '3308');
mysqli_select_db($con, 'SRM');
$q = "select * from student order by Roll_number";
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
    <form action="Updation.php" method="POST">
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
                <th>Amount Paid</th>
            </tr>
            <tr>
                <?php
                for ($i = 1; $i <= $num; $i++) {
                    $row = mysqli_fetch_array($result);
                ?>
            <tr>
                <td><input type="number" value="<?php echo $row['Roll_number']; ?>" name="rno<?php echo $i; ?>" /></td>
                <td><input type="text" value="<?php echo $row['Name']; ?>" name="name<?php echo $i; ?>" /></td>
                <td><input type="text" value="<?php echo $row['Batch']; ?>" name="batch<?php echo $i; ?>" /></td>
                <td><select name="subject<?php echo $i ?>">
                        <option><?php echo $row['Subject']; ?></option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="PHP">PHP</option>
                    </select></td>
                <td><input type="number" value="<?php echo $row['Age']; ?>" name="age<?php echo $i; ?>" /></td>
                <td><input type="text" value="<?php echo $row['Gender']; ?>" name="gender<?php echo $i; ?>" /></td>
                <td><input type="number" value="<?php echo $row['Amount_Paid']; ?>" name="amount<?php echo $i; ?>" /></td>
            </tr>
        <?php
                }
        ?>
        </tr>
        <tr>
            <td colspan="7"><input id="update-btn" type="submit" value="Update" />
        </tr>
        </table>
    </form>
</body>

</html>