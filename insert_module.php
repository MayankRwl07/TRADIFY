<?php
// Include database connection file
include 'db.php';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Insert data into modules table
    $sql = "INSERT INTO modules (title, description) VALUES ('$title', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New module added successfully.";
        echo "<a href='index.php'>Return to Home</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
