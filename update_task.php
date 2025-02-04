<?php
include "includes/db.php"; // Include database connection

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    
    $sql = "UPDATE tasks SET status = 'completed' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Task marked as completed.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
