<?php include("Header.php"); ?>
<?php include("dbcon.php"); ?>

<h2>Add New Student</h2>
<form action="add_student.php" method="POST">
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" required>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <button type="submit" class="btn btn-success" name="add_student">Add Student</button>
</form>

<?php
if (isset($_POST['add_student'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $query = "INSERT INTO `students` (first_name, last_name, age) VALUES ('$first_name', '$last_name', '$age')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Student added successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<?php include("footer.php"); ?>
