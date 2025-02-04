<?php
include "includes/db.php"; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = trim($_POST["task"]);
    

    if (!empty($task)) {
        $sql = "INSERT INTO tasks (task) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $task);

        if ($stmt->execute()) {
            echo "Task added successfully.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
