<?php
include "includes/db.php"; // Include database connection

// Fetch tasks from the database
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql);


// Loop through tasks and display them
while ($row = $result->fetch_assoc()) {
    echo '<li>';
    echo htmlspecialchars($row['task']);
    echo ' (' . $row['status'] . ') ';
    
    if ($row['status'] == 'pending') {
        echo '<button class="complete-task" data-id="' . $row['id'] . '">Complete</button>';
    }
    
    echo '<button class="delete-task" data-id="' . $row['id'] . '">Delete</button>';
    echo '</li>';
}
?>
