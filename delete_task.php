<?php
include "includes/db.php"; // Include database connection

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    

    $sql = "DELETE FROM tasks WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Task deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
