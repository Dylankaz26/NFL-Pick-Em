<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $pick1 = $_POST['pick1'];
    $pick2 = $_POST['pick2'];
    // ... retrieve other pick values similarly

    // Connect to the database (example assumes MySQL)
    $conn = new mysqli("localhost", "username", "password", "database_name");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert data
    $sql = "INSERT INTO submissions (name, pick1, pick2, pick3, pick4, pick5, pick6, pick7, pick8, pick9, pick10)
            VALUES ('$name', '$pick1', '$pick2', '$pick3', '$pick4', '$pick5', '$pick6', '$pick7', '$pick8', '$pick9', '$pick10')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>