<?php include("header.php");?>
<?php include("menu.php");?>
<?php
    $id = $_GET['id'];
    include("dao.php");
    $sql ="select college,category,merit from apply_tbl where id='$id'";
    $result = mysqli_query($connection,$sql);
    if($row = mysqli_fetch_row($result))
{
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card" style="top:50%;">
                    <div class="card-header">Hostel Application</div>
                    <div class="card-body">
                        <form action="updateprocess.php" method="post">
                            <table class ="table table-borderless">
                            <tr>
                                    <td>
                                            <input type="text" name="id" value="<?php echo $id;?>" readonly class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                            <select class="form-control" name="college" >
                                                <option>Select College</option>
                                                <option value="M" <?php if($row[0]=='M'){ echo "selected"; }?>>Medical</option>
                                                <option value="E" <?php if($row[0]=='E'){ echo "selected"; }?>>Engineering</option>
                                                <option value="P" <?php if($row[0]=='P'){ echo "selected"; }?>>Pharmacy</option>
                                            </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control" name="category">
                                                <option>Select Catagroy</option>
                                                <option value="ST" <?php if($row[1]=='ST'){ echo "selected"; }?>>ST</option>
                                                <option value="SEBC"<?php if($row[1]=='SEBC'){ echo "selected"; }?>>SEBC</option>
                                                <option value="SC" <?php if($row[1]=='SC'){ echo "selected"; }?>>SC</option>
                                                <option value="OPEN"<?php if($row[1]=='OPEN'){ echo "selected"; }?>> OPEN</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="merit" class="form-control" value="<?php echo $row[2]?>"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-warning fullwidth" /></td>
                                </tr>
                            </table>   
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <?php }?>




<?php include("footer.php");?>
    