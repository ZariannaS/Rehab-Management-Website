<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revise Health</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.7/lottie.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-top: 50px; /* Added margin-top */
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            margin: 0;
        }
        .w3-bar .w3-button {
            padding: 16px;
        }
        .links {
            margin-top: 20px;
        }
        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .overlay-content {
            position: relative;
            text-align: center;
            margin-top: 25%;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
            cursor: pointer;
            color: white;
        }

        @media screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
            }
        }
        .welcome-text {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            color: white;
            text-align: center;
            font-size: 18px;
            width: 300px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Revise Health Doctor Portal</h1>
        <div class="links">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
            <div class="search-bar">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </div>

    <!-- Welcome text -->
    <div class="welcome-text">
        <p>Welcome to your Revise Health Doctor Portal! Here you can access your records regarding your profile and treatment plan. To view or update records, navigate to the menu option.</p>
    </div>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="viewProfile.php">View Profile</a>
            <a href="updateProfile.php">Update Profile</a>
            <a href="viewAppointment.php">View Appointment</a>
            <a href="viewTreatmentPlan.php">View Patient Treatment Plans</a>
            <a href="updateTreatmentPlan.php">Update Patient Treatment Plans</a>

        </div>
    </div>

    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="index.php" class="w3-bar-item w3-button w3-wide">REVISE HEALTH</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Login</a>
                <a href="payment_login.php" class="w3-bar-item w3-button"><i class="fa fa-money"></i> Payment</a>
                <a href="getVirtualTour.php" class="w3-bar-item w3-button"><i class="fa fa-desktop"></i> Virtual Tour</a>
                <a href="getLiveChat.php" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> Live Chat</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Lottie animation -->
    <div id="lottie-animation" style="width: 600px; height: 600px;"></div>

    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

        // Load Lottie animation
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('lottie-animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'img/Animation - 1713451297756.json' // path to your Lottie animation JSON file
        });
    </script>
</body>
</html>
