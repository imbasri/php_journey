<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="todo-container">
        <h1>Todo List</h1>
        <form class="todo-form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="tasks" id="tasks" placeholder="Task">
            <button name="add">Add</button>
        </form>

        <?php
        // start session
        session_start();

        // initialize todo list jika belum ada
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }

        // add task
        if (isset($_POST['add'])) {
            $task = $_POST['tasks'];
            if (!empty($task)) {
                array_push($_SESSION['tasks'], $task);

                // redirect
                header('Location: ' . htmlspecialchars($_SERVER['PHP_SELF']));
            }
        }

        // remove task
        if (isset($_GET['remove'])) {
            $index = $_GET['remove'];
            array_splice($_SESSION['tasks'], $index, 1);
            // redirect
            header('Location: ' . htmlspecialchars($_SERVER['PHP_SELF']));
        }

        // print todo list
        if (empty($_SESSION['tasks'])) {
            echo "<p>Todo list empty</p>";
        }

        foreach ($_SESSION['tasks'] as $index => $task) {
            echo "<ul class='todo-list'>";
            echo "<li>$task <a class='remove' href='?remove=$index'>Remove</a></li>";
            echo "</ul>";
        }


        ?>
    </div>
</body>

</html>