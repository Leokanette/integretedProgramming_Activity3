<?php
session_start();    
include("config.php");

if(isset($_POST["insertbutton"])){
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];

    // Prepare and bind the query to avoid SQL injection
    $query = "INSERT INTO `tasks`(`id`, `title`, `description`, `priority`, `due_date`) VALUES ('','$title', '$description', '$priority', '$due_date')";
    $query_result = mysqli_query( $conn, $query );

    // Execute the query
    if($query_result){
        $_SESSION['status'] = "Successfully Added Task!";
        $_SESSION['status_code'] = "success";
        header("Location: create_task.php");
        exit();
    } else {
        $_SESSION['status'] = "Failed to add task: " . $conn->error;
        $_SESSION['status_code'] = "error";
        header("Location: create_task.php");
        exit();
    }
}

?>