<?php
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
<title>IP Mini Project</title>
<link rel="stylesheet" href="style1.css" />


</head>
<body>
<header>
	<h1>PERSONAL SCHEDULER</h1>
</header>
<div class="form">
    <p id="ritc">Welcome <?php echo $_SESSION['username']; ?>!</p>
    
    <form>
        <input type="text" placeholder="Enter The Work" class="todo_input" />
        <button class="todo_button" type="submit">
            <i class="fas fa-plus-square"></i>
        </button>
        <div class="select">
            <select name="todos" class="filter_todo">
                <option value="all">All</option>
                <option value="completed">Completed</option>
                <option value="uncompleted">Uncompleted</option>
            </select>
        </div>
    </form>
<footer>
<a href="logout.php">Logout</a>
<a href="
</footer>
    <!-- CONTAINER FOR DISPLAYING TO-DO LIST BY ADDING TASKS DYNAMICALLY USING JAVASCRIPT -->
    <div class="todo_container">
        <ul class="todo_list"></ul>
    </div>
    <!-- ADDING JAVA SCRIPT -->
    <script src="./main.js"></script>
</body>
</html>

