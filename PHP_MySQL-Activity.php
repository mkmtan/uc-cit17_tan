<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PHPScriptDemo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "create table if not exists Student(
    StudentID int primary key,
    FirstName varchar(50),
    LastName varchar(50),
    DateOfBirth date,
    Email varchar(100),
    Phone varchar(20)
    )";

$conn->query($sql);

$sql = "create table if not exists Course (
    CourseID int primary key,
    CourseName varchar(100),
    Credits int
    )";

$conn->query($sql);

$sql = "create table if not exists Instructor (
    InstructorID int primary key,
    FirstName varchar(50),
    LastName varchar(50),
    Email varchar(100),
    Phone varchar(20)
)";

$conn->query($sql);

$sql = "create table if not exists Enrollment (
    EnrollmentID int primary key,
    StudentID int,
    CourseID int,
    EnrollmentDate date,
    Grade varchar(5),
    FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY (CourseID) REFERENCES Course(CourseID)
)";

$conn->query($sql);
$sql = "insert into Student(StudentID, FirstName, LastName, DateOfBirth, Email, Phone)
values('215610127','Tan','Khella','2002-05-17','mmt0127@students.uc-bcf.edu.ph','09123456789')";

$conn->query($sql);

echo "Successfully created the tables and inserted data.";

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["FirstName"]. " - Email: " . $row["Email"]. "<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
