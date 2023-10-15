<!DOCTYPE html>
<html>
<head>
    <title>Student Attendance System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
    <img src="images/school.jpg">
        <h2>Student Attendance System</h2>
        <form method="post" action="process.php">
            <div class="form-group">
                <label for="index_number">Index Number:</label>
                <input type="text" class="form-control" id="index_number" name="index_number" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="class">Class:</label>
                <input type="text" class="form-control" id="class" name="class" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Mark Attendance</button>
        </form>
    </div>
</body>
</html>
