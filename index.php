<?php
    include 'db/connect.php';

    $sql="select * from ots";
    $result = mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uaf_test</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/Bootstrap-4-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">


    
</head>
<body>
    <header>
        <h3 class="text-center"> UAF Test</h3>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="new.php"><button id="btn__new" type="button" class="btn btn-success" >New</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="table__info" class="table table-striped table-bordered table-condensed" style="width: 100%;">
                        <thead class="text-center">
                            <tr>
                                <th>id</th>
                                <th>start date</th>
                                <th>end date</th>
                                <th>reference</th>
                                <th>invoice</th>
                                <th>department</th>
                                <th>cost center</th>
                                <th>account</th>
                                <th>project code</th>
                                <th>description</th>
                                <th>contractor</th>
                                <th>labor price</th>
                                <th>material price</th>
                                <th>state project</th>
                                <th>user id</th>
                                <th>comment</th>
                                <th>state</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>id team</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['startdate'] ?></td>
                                <td><?php echo $row['enddate'] ?></td>
                                <td><?php echo $row['reference'] ?></td>
                                <td><?php echo $row['invoice'] ?></td>
                                <td><?php echo $row['department'] ?></td>
                                <td><?php echo $row['costcenter'] ?></td>
                                <td><?php echo $row['account'] ?></td>
                                <td><?php echo $row['project_code'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['contractor'] ?></td>
                                <td><?php echo $row['labor_price'] ?></td>
                                <td><?php echo $row['material_price'] ?></td>
                                <td><?php echo $row['state_project'] ?></td>
                                <td><?php echo $row['userid'] ?></td>
                                <td><?php echo $row['comment'] ?></td>
                                <td><?php echo $row['state'] ?></td>
                                <td><?php echo $row['created_at'] ?></td>
                                <td><?php echo $row['updated_at'] ?></td>
                                <td><?php echo $row['idteam'] ?></td>
                                <td><?php echo "<a href='edit.php?id=".$row['id']."'>Edit</a>"; ?>
                                <?php echo "<a href='delete.php?id=".$row['id']."'>Delete</a>"; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

     
    
    <!-- <script src="https://unpkg.com/@popperjs/core@2"></script> -->
    <script src="assets/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>