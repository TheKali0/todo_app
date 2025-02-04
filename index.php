<?php
include "includes/db.php"; 


$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2>To-Do List</h2>
    
    <!-- Form to Add Task -->
    <form action="add_task.php" method="POST">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li style="<?= $row['status'] == 'completed' ? 'text-decoration: line-through; color: gray;' : '' ?>">
        <?= htmlspecialchars($row['task']) ?>
            (<?= $row['status'] ?>) 

            <?php if ($row['status'] == 'pending'): ?>
                <a href="update_task.php?id=<?= $row['id'] ?>">Complete</a>
            <?php endif; ?>

            <a href="delete_task.php?id=<?= $row['id'] ?>">Delete</a>
        </li>
    <?php endwhile; ?>
</ul>


</body>
</html>
