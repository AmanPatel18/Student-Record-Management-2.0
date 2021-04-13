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
    <title>Insert Records</title>
    <link rel="stylesheet" href="insert_style.css">
    <link type="text/css" href="navigation_style.css" rel="stylesheet" />

    <script>
        function calFee() {
            var sub = document.getElementById("subs");
            var value = sub.options[sub.selectedIndex].value;

            if (value == "C") {
                document.getElementById("fees").innerHTML = "Total Fees: 1000";
                document.getElementById("bat").value = "1st";
            } else if (value == "C++") {
                document.getElementById("fees").innerHTML = "Total Fees: 1500";
                document.getElementById("bat").value = "2nd";
            } else if (value == "Python") {
                document.getElementById("fees").innerHTML = "Total Fees: 3000";
                document.getElementById("bat").value = "3rd";

            } else if (value == "Java") {
                document.getElementById("fees").innerHTML = "Total Fees: 2000";
                document.getElementById("bat").value = "4th";

            } else if (value == "PHP") {
                document.getElementById("fees").innerHTML = "Total Fees: 2500";
                document.getElementById("bat").value = "5th";

            }
        }
    </script>
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
    <div id="div1">
        <form action="Insertion.php" method="POST">
            <table>
                <tr>
                    <th>Roll Number:</th>
                    <td><input type="number" name="rno" required></td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>Age:</th>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>Male<input type="radio" value="Male" name="gender" required></td>
                    <td>Female<input type="radio" value="Female" name="gender" required></td>
                </tr>
                <tr>
                    <th>Subject:</th>
                    <td><select id="subs" name="subject" onchange="calFee()" required>
                            <option>Select</option>
                            <option value="C">C</option>
                            <option value="C++">C++</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="PHP">PHP</option>
                        </select></td>
                    <th id="fees"></th>
                </tr>
                <tr>
                    <th>Batch:</th>
                    <td><input id="bat" type="text" name="batch"></td>
                </tr>

                <tr>
                    <th>Amount Paid:</th>
                    <td><input type="number" name="amount" required></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input id="sub-btn" type="submit" value="Insert"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>