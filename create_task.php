<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CREATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1>CREATE A TASK</h1>
<br><br>
<form method="post" action="process.php">
<div>
  <div class="form-group"  >
    <label for="title">TITLE</label>
    <input type="title" class="form-control" name='title' id="title" aria-describedby="emailHelp" placeholder="Enter title">
  </div><br>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="description" class="form-control" name='description' id="description" aria-describedby="emailHelp" placeholder="Enter description">
  </div><br>
  <div class="form-group">
    <label for="priority">Priority Level</label>
    <input type="text" class="form-control" name='priority' id="priority" aria-describedby="emailHelp" placeholder="choose priority level">
  </div><br>
  <div class="form-group">
    <label for="due_date">Due Date</label>
    <input type="date" class="form-control" name='due_date' id="due_date" aria-describedby="emailHelp" placeholder="Select Due Date">
  </div><br>
  
  <button type="submit" class="btn btn-primary" name="insertbutton">INSERT</button>
</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if (isset($_SESSION['status']) && $_SESSION['status_code'] != '' )
{
    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                icon: "<?php echo $_SESSION['status_code']; ?>",
            });
        </script> 
        <?php
        unset($_SESSION['status']);
        unset($_SESSION['status_code']);
}
?>


</body>
</html>

