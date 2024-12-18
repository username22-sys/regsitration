<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process and display submitted data
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $bio = htmlspecialchars($_POST['bio']);

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "    <title>Submitted Information</title>";
    echo "    <link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "    <div class='container'>";
    echo "        <h1>Submitted Information</h1>";
    echo "        <p><strong>First Name:</strong> $fname</p>";
    echo "        <p><strong>Last Name:</strong> $lname</p>";
    echo "        <p><strong>Email:</strong> $email</p>";
    echo "        <p><strong>Date of Birth:</strong> $dob</p>";
    echo "        <p><strong>Gender:</strong> $gender</p>";
    echo "        <p><strong>Bio:</strong> $bio</p>";
    echo "    </div>";
    echo "</body>";
    echo "</html>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css"> <!-- CSS Link -->
    <script src="script.js" defer></script> <!-- JavaScript Link -->
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="POST" onsubmit="return validateForm()">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required> Male
        <input type="radio" id="female" name="gender" value="Female"> Female

        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio" rows="4" required></textarea>

        <button type="submit" class="submit-btn">Submit</button>
    </form>
</body>
</html>
