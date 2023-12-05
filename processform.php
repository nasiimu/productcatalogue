<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
     $username = $_POST['username'];



    // File upload handling
    $uploadDir = 'uploads/'; // Create a directory called 'uploads' in the same folder as this script
    $uploadFile = $uploadDir . basename($_FILES['avatar']['name']);
    
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Upload failed.\n";
    }

    // Now you can process the rest of the form data or store the file path in a database.
    // For simplicity, let's just print the username and file path.
    echo "Username: $username\n";
    echo "Avatar Path: $uploadFile\n";
}
?>

