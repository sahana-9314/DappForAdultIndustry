<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Perform data validation here (e.g., check if email is valid, passwords match)

    // Save data to a text file (for demonstration purposes)
    $data = "Email: $email\nPassword: $password\n";
    $file = "user_data.txt";

    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Data has been successfully saved!";
    } else {
        echo "Error: Unable to save data.";
    }
} else {
    echo "Invalid request.";
}
?>