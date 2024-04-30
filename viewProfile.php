<!--// Code for viewProfile.php -->


<?php
    require_once('mysqli_connect.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
		echo "<p><a href=\"welcome.php\">Back</a></p>";
		echo "<p> <h1>Your Profile </h1></p>";
            $username = $_SESSION['login_user'];
            # fetch data from mysql database
            $query = "SELECT users.*, address.address FROM users
                      JOIN address ON patient.username = address.username WHERE users.username = '" . $username . "'";
            $response = mysqli_query($dbc, $query);
            $row = mysqli_fetch_array($response, MYSQLI_ASSOC);
            $count = mysqli_num_rows($response);

            if ($count == 1) {  
                # echo the user profile data
				echo "<p><input type='hidden' name='password' value='{$row['password']}'></p>";
				echo "<p><input type='hidden' name='username' value='{$row['username']}'></p>";
                echo "<p>First Name: {$row['fName']}</p>";
                echo "<p>Last Name: {$row['lName']}</p>";
                echo "<p>Address: {$row['address']}</p>";
                echo "<p>Email: {$row['email']}</p>";
			echo "<p><a href=\"viewHistory.php\">View Reservation History</a></p>";
            } else { // 0 = invalid user id
			echo "<p><b>Error:</b> Invalid User ID.</p>";
            }
        ?>
    </body>
</html>