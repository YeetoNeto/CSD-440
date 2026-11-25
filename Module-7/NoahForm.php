<?php
//Get input and determine if there was input, if not assign null
$firstName = trim($_POST['firstName'] ?? '');
$age = $_POST['Age'] ?? '';
$email = trim($_POST['Email'] ?? '');
$birthday = $_POST['Birthday'] ?? '';
$date = DateTime::createFromFormat('!Y-m-d', $birthday);
$inputDate = new DateTime($birthday);
$currentDate = new DateTime('today');
$hobby = $_POST['Hobby'] ?? '';
$student = isset($_POST['Student']) ? "Yes" : "No";
$teacher = isset($_POST['Teacher']) ? "Yes" : "No";
$errors = []; // array to store all possible errors to display
// Validate 
if (empty($firstName)) {
    $errors[] = "First name is required.";
}
if (filter_var($age, FILTER_VALIDATE_INT) === false || $age < 1 || $age > 120) {
    $errors[] = "Age must be a whole number between 1 and 120.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}
if (!$date || $date->format('Y-m-d') !== $birthday) {
    $errors[] = "Please enter a valid birthday.";
}
if ($inputDate !== null && $inputDate > $currentDate) {
    $errors[] = "I wasn't born yesterday, and you weren't born in the future 0.0";
}
if (empty($hobby)) {
    $errors[] = "Please select a valid Hobby.";
} ?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<link rel="stylesheet" href="Noahstyle.css">
<head>
    <title>Cool Survey Results</title>
</head>
<body>

<?php
if (!empty($errors)) {
    echo "<h1>Form Submission Errors</h1>";
    echo "<p>Please correct the following problems:</p>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul>";
    echo '<a href="NoahForm.html">Return to Form</a>';
} else {
    $age = (int)$age;
    echo "<h1>Successfully Submitted!</h1>";
    echo "<p>Your information was successfully validated.</p>";
    echo "<table border='1'>";
    echo "<tr><th>Field</th><th>Information</th></tr>";
    echo "<tr><td>First Name</td><td>" . htmlspecialchars($firstName) . "</td></tr>";
    echo "<tr><td>Age</td><td>" . $age . "</td></tr>";
    echo "<tr><td>Email</td><td>" . htmlspecialchars($email) . "</td></tr>";
    echo "<tr><td>Birthday</td><td>" . htmlspecialchars($birthday) . "</td></tr>";
    echo "<tr><td>Hobby</td><td>" . htmlspecialchars($hobby) . "</td></tr>";
    echo "<tr><td>Student</td><td>" . $student . "</td></tr>";
    echo "<tr><td>Teacher</td><td>" . $teacher . "</td></tr>";
    echo "</table>";
    echo '<br><a href="NoahForm.html">Return to Form</a>';
} ?>
</body>
</html>