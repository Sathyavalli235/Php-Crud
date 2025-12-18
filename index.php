<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Record System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2 class="mb-4">Add Student Record</h2>

<form action="insert.php" method="post" class="mb-5">
    
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Batch</label>
        <input type="number" name="batch" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Course</label>
        <input type="text" name="course" class="form-control" required>
    </div>

    <button type="submit" name="submit" class="btn btn-success"> Add Student </button>

</form>

<h2 class="mb-3">Students Record List</h2>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php include 'read.php'; ?>
    </tbody>
</table>

</div>

</body>
</html>
