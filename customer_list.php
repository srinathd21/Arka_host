<?php include 'links.php'; ?>
<?php include 'db_link.php'; ?>

<div class="p-5 table-responsive">
    <div class="d-flex">
        <a href="admin.php" class="btn btn-success mb-3">Back</a>
    </div>
    <table class="table table-bordered table-hover">
        <tr class="">
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Course</th>
            <th>Date</th>
        </tr>


        <?php
        $sql = "SELECT * FROM customer_data";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $num = 0;
            while ($row = $result->fetch_assoc()) {
                $num++;
                echo "<tr>";
                echo "<td>". $num. "</td>";
                echo "<td>". $row["name"]. "</td>";
                echo "<td>". $row["contact"]. "</td>";
                echo "<td>". $row["email"]. "</td>";
                echo "<td>". $row["Course"]. "</td>";
                echo "<td>". $row["date"]. "</td>";
                echo "</tr>";
            }
        }
        ?>

    </table>

</div>