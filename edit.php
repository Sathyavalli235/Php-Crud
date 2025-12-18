<?php
include 'connection.php';

$id = $_GET['id'];
$result = $dbcon->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2 class="mb-4 text-center">Edit Student Record</h2>

<form action="update.php" method="post" class="mx-auto" style="max-width:500px;">

    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Batch</label>
        <input type="number" name="batch" value="<?= $row['batch'] ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Course</label>
        <input type="text" name="course" value="<?= $row['course'] ?>" class="form-control" required>
    </div>

    <div class="d-flex gap-2">
        <button type="submit" name="submit" class="btn btn-success">
            Update
        </button>
        <a href="index.php" class="btn btn-secondary">
            Cancel
        </a>
    </div>

</form>

</div>

</body>
</html>
