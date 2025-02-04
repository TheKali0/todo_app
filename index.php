<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Form to Add Task -->
    <form id="add-task-form">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul id="task-list">

</ul>

    <script>
        function loadTasks() {
            $.ajax({
                url: 'load_tasks.php', 
                type: 'GET',
                success: function(response) {
                    $('#task-list').html(response);
                }
            });
        }

        $('#add-task-form').submit(function(event) {
            event.preventDefault(); 

            const task = $('input[name="task"]').val(); 

            $.ajax({
                url: 'add_task.php', 
                type: 'POST',
                data: { task: task },
                success: function(response) {
                    loadTasks(); 
                    $('input[name="task"]').val(''); 
                }
            });
        });

        $(document).ready(function() {
            loadTasks();
        });

        $(document).on('click', '.complete-task', function() {
            const taskId = $(this).data('id');
            $.ajax({
                url: 'update_task.php',
                type: 'GET',
                data: { id: taskId },
                success: function(response) {
                    loadTasks(); // Reload tasks after updating
                }
            });
        });

        $(document).on('click', '.delete-task', function() {
            const taskId = $(this).data('id');
            $.ajax({
                url: 'delete_task.php',
                type: 'GET',
                data: { id: taskId },
                success: function(response) {
                    loadTasks(); // Reload tasks after deleting
                }
            });
        });
    </script>
</body>
</html>
