<?php include 'links.php'; ?>
<?php include 'db_link.php'; ?>

<style>
    table,th,td{
        border: 1px solid rgb(209, 209, 209,0.9);
        border-collapse: collapse;
        padding: 15px;
    }
    
</style>
<div class="p-5 table-responsive">
    <div class="d-flex">
        <a href="admin.php" class="btn btn-success m-3">Add Course</a>
    </div>
    <table class="">
        <tr class="">
            <th>ID</th>
            <th>Category</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>


        <?php
        $sql = "SELECT * FROM course_category";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $num = 0;
            while ($row = $result->fetch_assoc()) {
                $num++;
                echo "<tr>";
                echo "<td>". $num. "</td>";
                echo "<td>". $row["category"]. "</td>";
                echo "<td>". $row["description"]. "</td>";
                echo "<td><a class='btn btn-info' href='edit_category.php?id=". $row["cid"]. "'>Edit</a></td>";
                echo "<td><a class='btn btn-danger' href='delete_category.php?id=". $row["cid"]. "'>Delete</a></td>";
                echo "</tr>";
            }
        }
        ?>

    </table>

</div>