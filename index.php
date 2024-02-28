<?php 
session_start();
include("config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<Center>
<h1> TASK MANAGEMENT SYSTEM</h1>
  <section class="vh-100">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Due Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM tasks";
            if ($result = $conn->query($query)) {
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["id"];
                        $field2name = $row["title"];
                        $field3name = $row["description"];
                        $field4name = $row["priority"];
                        $field5name = $row["due_date"];

                        echo '<tr>
                                <td>' . $field1name . '</td>
                                <td>' . $field2name . '</td>
                                <td>' . $field3name . '</td>
                                <td>' . $field4name . '</td>
                                <td>' . $field5name . '</td>
                            </tr>';
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                $result->free();
            } else {
                echo "<tr><td colspan='5'>Error executing the query: " . $conn->error . "</td></tr>";
            }
            ?>
        </tbody>
    </table>
</section>

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
</center>
  </body>
</html>