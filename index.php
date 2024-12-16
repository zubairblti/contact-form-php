<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Data Display</title>
    <link rel="stylesheet" href="style.css">   
</head>
<?php

$name = '';
$email = '';
$phone = '';
$dob = '';
$gender = '';
$country = '';
$address = '';
$education = '';
$profession = '';
$hobbies = '';


if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['Name'];
    $email = $_REQUEST['Email'];
    $phone = $_REQUEST['Phone'];
    $dob = $_REQUEST['Dob'];
    $gender = $_REQUEST['Gender'];
    $country = $_REQUEST['Country'];
    $address = $_REQUEST['Address'];
    $education = $_REQUEST['Education'];
    $profession = $_REQUEST['Profession'];
    $hobbies = $_REQUEST['Hobbies'];
}
?>

<body>
    <div class="form-container">
        <h2>Submit Your Information</h2>
        <form id="dataForm" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="Phone" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="Dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="Gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select id="country" name="Country" required>
                    <option value="">Select</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="Address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="education">Education:</label>
                <input type="text" id="education" name="Education" required>
            </div>
            <div class="form-group">
                <label for="profession">Profession:</label>
                <input type="text" id="profession" name="Profession" required>
            </div>
            <div class="form-group">
                <label for="hobbies">Hobbies:</label>
                <input type="text" id="hobbies" name="Hobbies" required>
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
        </form>
    </div>
    <div class="data-display" id="dataDisplay">
        <h3>Submitted Data</h3>
    <div id="dataContent">
        <div class="data-item"><span>Name:</span><?php echo htmlspecialchars($name); ?></div>
        <div class="data-item"><span>Email:</span><?php echo htmlspecialchars($email); ?></div>
        <div class="data-item"><span>Phone:</span><?php echo htmlspecialchars($phone); ?></div>
        <div class="data-item"><span>Dob:</span><?php echo htmlspecialchars($dob); ?></div>
        <div class="data-item"><span>Gender:</span><?php echo htmlspecialchars($gender); ?></div>
        <div class="data-item"><span>Country:</span><?php echo htmlspecialchars($country); ?></div>
        <div class="data-item"><span>Address:</span><?php echo htmlspecialchars($address); ?></div>
        <div class="data-item"><span>Education:</span><?php echo htmlspecialchars($education); ?></div>
        <div class="data-item"><span>Profession:</span><?php echo htmlspecialchars($profession); ?></div>
        <div class="data-item"><span>Hobbies:</span><?php echo htmlspecialchars($hobbies); ?></div>
    </div>
    </div>
</body>
</html>