

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    index_number VARCHAR(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    class VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL
);

CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    date DATE NOT NULL,
    status ENUM('Present', 'Absent') NOT NULL
);
