<?php
require_once('mysqli_connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
        }
        h1 {
            font-size: 24px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            font-size: 16px;
            padding: 8px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <?php
    echo "<p><a href=\"viewProfile.php\">Back to Profile</a></p>";
    echo "<h1>Update Profile</h1>";
    $username = $_SESSION['login_user'];
    $query = "SELECT * FROM Patient WHERE username = '" . $username . "'";
    $response = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($response, MYSQLI_ASSOC);

    $count = mysqli_num_rows($response);
    if ($count == 1) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $password = $_POST['password'];
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $address = $_POST['address'];
            $email = $_POST['email'];

            $query = "UPDATE Patient SET password ='$password',
                                         name ='$fName $lName',
                                         email ='$email',
                                         address ='$address'
                      WHERE username ='$username'";
            $response = mysqli_query($dbc, $query);
            if (mysqli_affected_rows($dbc) == 1) {
                echo "<p>Your profile has been updated successfully.</p>";
            } else {
                echo "<p>An error occurred while updating your profile.</p>";
            }
        }

        echo "<form action='' method='POST'>";
        echo "<label for='username'>Username:</label>";
        echo "<p>{$row['username']}</p>";
        echo "<label for='password'>Password:</label>";
        echo "<input type='password' name='password' value='{$row['password']}' required>";
        echo "<label for='fName'>First Name:</label>";
        echo "<input type='text' name='fName' value='{$row['name']}' required>";
        echo "<label for='lName'>Last Name:</label>";
        echo "<input type='text' name='lName' value='{$row['name']}' required>";
        echo "<label for='address'>Address:</label>";
        echo "<input type='text' name='address' value='{$row['address']}' required>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='text' name='email' value='{$row['email']}' required>";
        echo "<input type='submit' name='update' value='Update Now'>";
        echo "</form>";
    } else {
        echo "<p>Error: Invalid User.</p>";
    }
    ?>
</body>
</html>
