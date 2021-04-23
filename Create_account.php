<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="Create_style.css">
</head>

<body>
    <h1 style="text-align:center;">Student Record Management</h1>
    <div id="div1">
        <form action="Creation.php" method="POST">
            <table>
                <tr>
                    <th>Username</th>
                    <td><input type="text" placeholder="Enter Username" name="username" required /></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" placeholder="Enter Password" name="password" required /></td>
                </tr>
                <tr>
                    <td><a href="Login.php">Already have an account?</a></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input id="sub-btn" type="submit" value="Create" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>