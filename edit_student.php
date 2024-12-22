<?php include("Header.php"); ?>
<?php include("dbcon.php"); ?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM `students` WHERE id=$id";
$result = mysqli_query($connection, $query);
$student = mysqli_fetch_array($result);
?>

<h2>Edit Student</h2>
<form action="edit_student.php?id=<?php echo $id; ?>" method="POST">
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $student['first_name']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $student['last_name']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="<?php echo $student['age']; ?>" required>
    </div>
    <button type="submit" class="btn btn-warning" name="update_student">Update Student</button>
</form>

<?php
if (isset($_POST['update_student'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $query = "UPDATE `students` SET first_name='$first_name', last_name='$last_name', age='$age' WHERE id=$id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Student updated successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<?php include("footer.php"); ?>
