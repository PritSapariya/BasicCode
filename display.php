<?php include("header.php");?>
<?php include("menu.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br/>
                <table class="table table-bordered">
                <thead class="thead-dark">
                    <th>Id</th>
                    <th>College</th>
                    <th>Category</th>
                    <th>Merit</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Token ID</th>
                </thead>
                    <?php
                            include("dao.php");
                            $id = $_GET['id'];


                            $sql = "select * from apply_tbl INNER JOIN student_details ON student_details.id=apply_tbl.id where college = (select college from login_tbl where user_id = $id)";
                            $result = mysqli_query($connection,$sql);
                            
                            while($row = mysqli_fetch_assoc($result))
                            {
                            
                                echo  "<tr><td>".$row['id']."</td>";
                                echo  "<td>".$row['college']."</td>";
                                echo  "<td>".$row['category']."</td>";
                                echo  "<td>".$row['merit']."</td>";
                                echo  "<td>".$row['name']."</td>";
                                echo  "<td>".$row['city']."</td>";
                                echo  "<td>".$row['token_id']."</td>";
                                ?>
                                    <td>
                                        <a href="updatedata.php?id=<?php echo $row['id']?>">EDIT</a>
                                    </td>
                                    <td>
                                        <a href="deletedata.php?id=<?php echo $row['id']?>">DELETE</a>
                                    </td></tr>
                                <?php
                            }
                    ?>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<?php include("footer.php");?>
    