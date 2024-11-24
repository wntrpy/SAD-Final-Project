<?php
// Include database configuration
include ("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data and sanitize
    $firstname = htmlspecialchars($_POST['firstname']);
    $midname = htmlspecialchars($_POST['midname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $dateofbirth = htmlspecialchars($_POST['dateofbirth']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpass'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert into the database
        $sql = "INSERT INTO register (firstname, midname, lastname, dateofbirth, phone, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $firstname, $midname, $lastname, $dateofbirth, $phone, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>