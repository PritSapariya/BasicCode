<?php include("header.php");?>
<?php include("menu.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card" style="top:50%;">
                    <div class="card-header">Administrator Login</div>
                    <div class="card-body">
                        <form action="loginprocess.php" method="post">
                            <table class ="table table-borderless">
                                <tr>
                                    <td>
                                        <?php 
                                            if(isset($_GET['error'])){
                                                echo "Invalid Username/ Password";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="username" placeholder="Enter Username" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="password" placeholder="Enter Password" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-warning fullwidth"/></td>
                                </tr>
                            </table>   
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<?php include("footer.php");?>
    