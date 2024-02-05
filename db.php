<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dip";

    // Create connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['DOB'];
    $state = $_POST['indianStates'];
    $phone = $_POST['number'];
    $adhar = $_POST['adhar'];

    // Insert data into the database
    $sql = "INSERT INTO `dip`. `dip_data` (`name`, `gender`, `dob`, `state`, `phone`, `adhar`) VALUES ('$name', '$gender', '$dob', '$state', '$phone', '$adhar')";

    if (mysqli_query($con, $sql)) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPD Card</title>
    <link rel="stylesheet" href="opdticket.css">
    <link rel="icon" type="image/x-icon" href="images/logo1.ico">
    <style>
       
    </style>
</head>
<body>
    <button class="btn" onclick="window.print()">Download PDF</button>
    
    <main>
        <div class="container">
            <hr>
            <div id="nav">
                <div id="image"><img src="images/logo.png"></div>
                <div id="head">
                    <h3>Gouri Devi Institute of <br> Medical Sciences & Hospital</h3>
                    <h3>G.T Road, Rajbadh, Durgapur</h3>
                </div>
                <p>OPD Patient Card <br>Radiology</p>
            </div>
            <hr>

            <table> 
                <tr>
                    <td><strong>Patient's Name:</strong>  Akash Biswas</td>
                </tr>
                <tr>
                    <td>Date of Birth(DOB): 16/11/2004</td>
                </tr>
                <tr>
                    <td>Address:  World</td>
                    <td>Contact No:  +917364020065</td>
                </tr>
                <tr>
                    <td>Aadhar No: 737474757473</td>
                </tr>
                <tr>
                    <td>Doctor's Name: Shiv Shankar Jana</td>
                    <td>Room Number: 45, 2ND FLOOR</td>
                </tr>
            </table>

            <main id="contentt"></main>
            <footer>
                <p class="foot"> &#9742; Helpline:<br> 801116644, 9333927289</p>
                <p class="foot"> &#x2709; Mail to:<br>grievance@gimsh.in</p>
                <p class="foot"> &#128279;Visit Us:<br>gimsh.in/public-grievance-cell</p>
            </footer>
        </div>
    </main>
</body>
</html>

