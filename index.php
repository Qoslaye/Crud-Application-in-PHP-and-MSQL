<?php include("Header.php"); ?>
<?php include("dbcon.php"); ?>

<h2>ALL STUDENTS</h2>
<div class="box1">
    <button class="btn btn-primary" onclick="window.location.href='add_student.php'">ADD STUDENT</button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM `students`";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td>
                        <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Update</a>
                        <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
<?php include("footer.php"); ?>
