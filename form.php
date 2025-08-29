<html>
<head>
    <title>Student Registration Details</title>
    <style>
        div {
            background-image: url("./img.jpg");
            position: relative;
            left: 20px; 
            top: 30px; 
            width: 300px; 
            height: auto;
            padding: 50px; 
            color: rgba(0, 0, 0, 1);
            border-radius: 1rem;
            border: 2px solid blueviolet;
        }
    </style>
</head>
<body>
    <center>
<div>
<?php
echo "Aditya Degree College for Women, Kakinada<br>";
echo "Student Registration Form<br>";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$suc_code = $_POST['suc_code'];
$hall_ticket = $_POST['hall_ticket'];
$courses = $_POST['courses'];
if (empty($name)) {
    echo "Name is required.";
} 
else if (empty($email)) {
    echo "Email is required.";
} 
else if (empty($phone)) {
    echo "Phone number is required.";
} 
else if (empty($gender)) {
    echo "Gender is required.";
} 
else if (empty($dob)) {
    echo "Date of Birth is required.";
} 
else if (empty($suc_code)) {
    echo "SUC code is required.";
} 
else if (empty($hall_ticket)) {
    echo "Hall ticket number is required.";
} 
else if (empty($courses)) {
    echo "Please select at least one course.";
} 


else {
    echo "Full Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone Number: $phone<br>";
    echo "Gender: $gender<br>";
    echo "Date of Birth: $dob<br>";
    echo "SUC Code: $suc_code<br>";
    echo "Hall Ticket No: $hall_ticket<br>";
    echo "Selected Course(s): <ul>";
    foreach ($courses as $course) {
        echo "<li>$course</li>";
    }
    echo "</ul>";
}
?>
</div>
</body>
</html>