<?php
include("dbcon.php");

$id = $_GET['id'];
$query = "DELETE FROM `students` WHERE id=$id";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "<script>alert('Student deleted successfully!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($connection);
}
?>
