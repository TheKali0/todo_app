<?php
include "includes/db.php"; // Include database connection

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "UPDATE tasks SET status = 'completed' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php"); // Redirect back to main page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
