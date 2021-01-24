<?php
    include 'db/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/Bootstrap-4-4.1.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
        if(isset($_POST['send'])){
            // store the information that the user has entered
            $id = $_POST['id'];
            $startdate = $_POST['startd'];
            $enddate = $_POST['endd'];
            $reference = $_POST['reference'];
            $invoice = $_POST['invoice'];
            $department = $_POST['department'];
            $costcenter = $_POST['costcenter'];
            $account = $_POST['account'];
            $projectcode = $_POST['projectcode'];
            $description = $_POST['description'];
            $contractor = $_POST['contractor'];
            $laborprice = $_POST['laborprice'];
            $materialprice = $_POST['materialprice'];
            $stateproject = $_POST['stateproject'];
            $userid = $_POST['userid'];
            $comment = $_POST['comment'];
            $state = $_POST['state'];
            $idteam = $_POST['idteam'];

            /*update a record with the information entered by the user*/
            $sql = "update ots set startdate='".$startdate."', enddate='".$enddate."', reference='".$reference."', invoice='".$invoice."', department='".$department."', costcenter='".$costcenter."', account='".$account."', project_code='".$projectcode."', description='".$description."', contractor='".$contractor."', labor_price='".$laborprice."', material_price='".$materialprice."', state_project='".$stateproject."', userid='".$userid."', comment='".$comment."', state='".$state."', idteam='".$idteam."' where id='".$id."'";

            $result = mysqli_query($connection, $sql);

            if($result){
                echo "updated";
            } else{
                echo "no updated";
            }
            mysqli_close($connection);

        } else{
            //show the information in the db 
            $id = $_GET['id'];
            $sql = "select * from ots where id = '".$id."'";
            $result = mysqli_query($connection, $sql);

            $row = mysqli_fetch_assoc($result);
            $startdate = $row["startd"];
            $enddate = $row["endd"];
            $reference = $row["reference"];
            $invoice = $row["invoice"];
            $department = $row["department"];
            $costcenter = $row["costcenter"];
            $account = $row["account"];
            $projectcode = $row["projectcode"];
            $description = $row["description"];
            $contractor = $row["contractor"];
            $laborprice = $row["laborprice"];
            $materialprice = $row["materialprice"];
            $stateproject = $row["stateproject"];
            $userid = $row["userid"];
            $comment = $row["comment"];
            $state = $row["state"];
            $idteam = $row["idteam"];

            mysqli_close($connection);
        
    ?>
    <div class="container">
    <h1> Edit Record</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="col-lg-6">
            <div class="col-auto">
                <label class="form-label" for="startdate"> Start Date:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="date" name="startd" id="startdate" value="<?php echo $startdate; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="enddate"> End Date:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="date" name="endd" id="enddate" value="<?php echo $enddate; ?>"><br>
            </div>

            <div class="col-auto">
                <label class="form-label" for="ref"> Reference:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="reference" id="ref" value="<?php echo $reference; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="inv"> Invoice:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="invoice" id="inv" value="<?php echo $invoice; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="depart"> Deparment:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="department" id="depart" value="<?php echo $department; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="costc"> Cost Center:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="costcenter" id="costc" value="<?php echo $costcenter; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="acc">Account:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="account" id="acc" value="<?php echo $account; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="procod">Project Code:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="projectcode" id="procod" value="<?php echo $projectcode; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="descr">Description:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="description" id="descr" value="<?php echo $description; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="contr">Contractor:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="contractor" id="contr" value="<?php echo $contractor; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="labpr">Labor Price:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="laborprice" id="labpr" value="<?php echo $laborprice; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="matpr">Material Price:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="materialprice" id="matpr" value="<?php echo $materialprice; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="statpr">State Project:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="stateproject" id="statpr" value="<?php echo $stateproject; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="userid">User id:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="userid" id="userid" value="<?php echo $userid; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="comm">Comment:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="comment" id="comm" value="<?php echo $comment; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="stat">State:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="state" id="stat" value="<?php echo $state; ?>">
            </div>

            <div class="col-auto">
                <label class="form-label" for="idteam">Id Team:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="idteam" id="idteam" value="<?php echo $idteam; ?>"><br>
            </div>

            <div class="col-auto">
                <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
            <div class="col-auto">
                <input class="btn btn-primary" type="submit" name="send" value="Update">
            <a href="index.php">Back</a>
            </div>
        </div>
        
    </form>
    <?php } ?>
    </div>
    
    
</body>
</html>