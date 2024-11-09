<?php include 'links.php'; ?>
<?php include 'db_link.php'; ?>
<style>
    table,th,td{
        border: 1px solid rgb(209, 209, 209,0.9);
        border-collapse: collapse;
    }
    
    #desc,#syllbus{
        display: inline-block;
        padding: 5px;
        height: 130px;
        width: 200px;
        border: none;
        border-bottom: 1px solid rgb(209, 209, 209,0.9);
        overflow-y: scroll;
    }
    #syllbus{
       width: 120px;
    }
</style>
<div class="p-5 table-responsive">
    <div>
        <a href="admin.php" class="btn btn-success m-3">Add Course</a>
    </div>
    <table class="">
        <tr class="">
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Sub Domain</th>
            <th>Hours</th>
            <th>Cost</th>
            <th>Syllabus</th>
            <th>Image Path</th>
            <th>Description</th>
            <th>Is main domain</th>
            <th>Trending</th>
            <th>Offer</th>
            <th>Special</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>


        <?php
        $sql = "SELECT * FROM course_form";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $num = 0;
            while ($row = $result->fetch_assoc()) {
                $num++;
                echo "<tr>";
                echo "<td>". $num. "</td>";
                echo "<td>". $row["title"]. "</td>";
                echo "<td>". $row["category"]. "</td>";
                echo "<td>". $row["sub_domain"]. "</td>";
                echo "<td>". $row["hours"]. "</td>";
                echo "<td>". $row["cost"]. "</td>";
                echo "<td id='syllbus'>". $row["syllabus"]. "</td>";
                echo "<td>". $row["img_path"]. "</td>";
                echo "<td  id='desc'>". $row["description"]. "</td>";
                echo "<td>". $row["main_domain"]. "</td>";
                echo "<td>". $row["trending"]. "</td>";
                echo "<td>". $row["offer"]. "</td>";
                echo "<td>". $row["special"]. "</td>";
                echo "<td><a class='btn btn-info' href='edit_course.php?id=". $row["id"]. "'>Edit</a></td>";
                echo "<td><a class='btn btn-danger' href='delete_course.php?id=". $row["id"]. "'>Delete</a></td>";
                echo "</tr>";
            }
        }
        ?>

    </table>

</div>