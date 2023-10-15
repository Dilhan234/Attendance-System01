<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "registration_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $index_number = $_POST["index_number"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $gender = $_POST["gender"];
    $status = $_POST["status"];
    $date = date("Y-m-d");

    // Insert student information
    $insert_student = "INSERT INTO students (index_number, name, class, gender) VALUES ('$index_number', '$name', '$class', '$gender')";
    mysqli_query($conn, $insert_student);

    // Get the student ID
    $student_id = mysqli_insert_id($conn);

    // Insert attendance record
    $insert_attendance = "INSERT INTO attendance (student_id, date, status) VALUES ('$student_id', '$date', '$status')";
    mysqli_query($conn, $insert_attendance);
}

mysqli_close($conn);
header("Location: index.php");
?>
