<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System Setup</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #265828;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        code {
            background-color: #f8f8f8;
            padding: 2px 4px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .details-form {
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
        <h2><center>Student Information System Setup</center></h2>
        <div><center>
            <button onclick="showForm('user-details-form')">User</button>
            <button onclick="showForm('student-details-form')">Student</button>
            <button onclick="showForm('course-details-form')">Course</button>
            <button onclick="showForm('instructor-details-form')">Instructor</button>
        </center></div>

        <div id="user-details-form" class="details-form" style="display: block;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Create User</h3>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <br>
                <input type="submit" name="create_user" value="Create User">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete User by ID</h3>
                <label for="delete_user_id">User ID:</label>
                <input type="number" name="delete_user_id" required>
                <input type="submit" name="delete_user_by_id" value="Delete User by ID">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View User Details</h3>
                <label for="view_username">Username:</label>
                <input type="text" name="view_username" required>
                <input type="submit" name="view_user" value="View User Details">
            </form>
        </div>

        <div id="student-details-form" class="details-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Add New Student Profile</h3>
                <label for="newstud">New Student Name:</label>
                <input type="text" name="new_student_name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <br>
                <input type="submit" name="create_new_student_profile" value="Create New Student Profile">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete Student Profile by ID</h3>
                <label for="delete_student_id">Student Profile ID:</label>
                <input type="number" name="delete_student_id" required>
                <input type="submit" name="delete_student_by_id" value="Delete Student Profile by ID">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View Student Details</h3>
                <label for="view_student">Student Name:</label>
                <input type="text" name="view_student" required>
                <input type="submit" name="view_student" value="View Student Details">
            </form>
        </div>

        <div id="course-details-form" class="details-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Add New Course</h3>
                <label for="course_name">Course Name:</label>
                <input type="text" name="course_name" required>
                <br>
                <label for="credits">Credits:</label>
                <input type="number" name="credits" required>
                <br>
                <input type="submit" name="create_course" value="Create Course">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete Course by Name</h3>
                <label for="delete_course_name">Course Name:</label>
                <input type="text" name="delete_course_name" required>
                <input type="submit" name="delete_course_by_name" value="Delete Course">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View Course</h3>
                <label for="view_course">Course Name:</label>
                <input type="text" name="view_course" required>
                <input type="submit" name="view_course" value="View Course">
            </form>
        </div>

        <div id="instructor-details-form" class="details-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Add New Instructors</h3>
                <label for="instructor_name">Instructor Name:</label>
                <input type="text" name="instructor_name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <br>
                <input type="submit" name="create_instructor" value="Create New Instructor">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete Instructor by ID</h3>
                <label for="delete_instructor_id">Instructor ID:</label>
                <input type="number" name="delete_instructor_id" required>
                <input type="submit" name="delete_instructor_by_id" value="Delete Instructor by ID">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View Instructor Details</h3>
                <label for="view_instructor">Instructor:</label>
                <input type="text" name="view_instructor" required>
                <input type="submit" name="view_instructor" value="View Instructor Details">
            </form>
        </div>
        
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tan";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error)    {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "create database if not exists `$dbname`";
        if  ($conn->query($sql) === TRUE)   {
            echo "The database created successfully";
        } else {
            echo "There is an error creating database: " . $conn->error;
        }

        $conn->select_db($dbname);

        $sql_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID INT AUTO_INCREMENT PRIMARY KEY,
            Username VARCHAR(50) NOT NULL,
            Password VARCHAR(50) NOT NULL,
            Email VARCHAR(50) NOT NULL
        )";
        $conn->query($sql_users);

        $sql_student = "CREATE TABLE IF NOT EXISTS Student (
            StudentID INT AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(50) NOT NULL,
            LastName VARCHAR(50) NOT NULL,
            Birthdate DATE NOT NULL,
            Email VARCHAR(50) NOT NULL
        )";
        $conn->query($sql_student);

        $sql_course = "CREATE TABLE IF NOT EXISTS Course (
            CourseID INT AUTO_INCREMENT PRIMARY KEY,
            CourseName VARCHAR(50) NOT NULL,
            Credits INT NOT NULL
        )";
        $conn->query($sql_course);

        $sql_instructor = "CREATE TABLE IF NOT EXISTS Instructor (
            InstructorID INT AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(50) NOT NULL,
            LastName VARCHAR(50) NOT NULL,
            Email VARCHAR(50) NOT NULL
        )";
        $conn->query($sql_instructor);

        $sql_enrollment = "CREATE TABLE IF NOT EXISTS Enrollment (
            EnrollmentID INT AUTO_INCREMENT PRIMARY KEY,
            StudentID INT,
            CourseID INT,
            FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
            FOREIGN KEY (CourseID) REFERENCES Course(CourseID)
        )";
        $conn->query($sql_enrollment);
        ?>
        <script>
            function showForm(formId) {
                var forms = document.getElementsByClassName('details-form');
                for (var i = 0; i < forms.length; i++) {
                    forms[i].style.display = 'none';
                }

                document.getElementById(formId).style.display = 'block';
            }
        </script>
    </div>
</body>
</html>