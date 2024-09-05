<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    <link rel="stylesheet" href="studentAttendance.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">QR Code Attendance</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student-login.html">Log Out</a>
                </li>
            </ul>
        </div>
    </nav> 
    <div class="container">
        <h2>Check Your Attendance</h2>
        <form action="" method="POST">
            <label for="roll_number">Enter Your Roll Number:</label>
            <input type="text" id="roll_number" name="roll_number" required>
            <button type="submit">Get Attendance</button>
        </form>

        <?php
        // Database connection
        $servername = "localhost"; // Change if your database is hosted elsewhere
        $username = "root"; // Your database username
        $password = ""; // Your database password
        $dbname = "attendance_system"; // Your database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $roll_number = $_POST['roll_number'];

            $sql = "SELECT * FROM attendancetable WHERE roll_number = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $roll_number);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<h2>Attendance Records for Roll Number: $roll_number</h2>";
                echo "<table border='1'>";
                echo "<tr><th>Name</th><th>Roll Number</th><th>Timestamp</th></tr>";

                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["roll_number"]. "</td><td>" . $row["timestamp"]. "</td></tr>";
                }

                echo "</table>";
            } else {
                echo "<p>No attendance records found for Roll Number: $roll_number</p>";
            }

            $stmt->close();
        }

        $conn->close();
        ?>
    </div>
</body>