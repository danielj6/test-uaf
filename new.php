<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Record</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/Bootstrap-4-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
        if(isset($_POST['send'])){
            //store in variables the the new information 
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

            include 'db/connect.php';

            // consult definition 
            $sql = "insert into ots(startdate, enddate, reference, invoice, department, costcenter, account, project_code, description, contractor, labor_price, material_price, state_project, userid, comment, state, idteam) values('".$startdate."', '".$enddate."', '".$reference."', '".$invoice."', '".$department."', '".$costcenter."', '".$account."', '".$projectcode."', '".$description."', '".$contractor."', '".$laborprice."', '".$materialprice."', '".$stateproject."', '".$userid."', '".$comment."', '".$state."', '".$idteam."')";

            $result = mysqli_query($connection, $sql);

            if($result){
                header("Location: index.php");
            } else {
                echo "ERROR";
            }
            mysqli_close($connection);
        } else{
            
        }
        
    ?>

    <div class="container">
    <h1>New Record</h1>
    <form class="row" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="col-lg-6">
            <div class="col-auto">
                <label for="startdate" class="form-label"> Start Date:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="date" name="startd" id="startdate">
            </div>
            <div class="col-auto">
                <label class="form-label" for="enddate"> End Date:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="date" name="endd" id="enddate">
            </div>
            <div class="col-auto">
                <label class="form-label" for="ref"> Reference:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="reference" id="ref">
            </div>
            <div class="col-auto">
                <label class="form-label" for="inv"> Invoice:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="invoice" id="inv">
            </div>
            <div class="col-auto">
                <label class="form-label" for="depart"> Deparment:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="department" id="depart">
            </div>
            <div class="col-auto">
                <label class="form-label" class="form-label" for="costc"> Cost Center:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" class="form-control" type="number" name="costcenter" id="costc"> <br>
            </div>
            <div class="col-auto">
                <label class="form-label" for="acc">Account:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="account" id="acc">
            </div>
            <div class="col-auto">
                <label class="form-label" for="procod">Project Code:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="projectcode" id="procod">
            </div>
            <div class="col-auto">
                <label class="form-label" for="descr">Description:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="description" id="descr">
            </div>
            <div class="col-auto">
                <label class="form-label" for="contr">Contractor:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="contractor" id="contr">
            </div>
            <div class="col-auto">
                <label class="form-label" for="labpr">Labor Price:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="laborprice" id="labpr">
            </div>   
            <div class="col-auto">
                <label class="form-label" for="matpr">Material Price:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="materialprice" id="matpr">
            </div> 
            <div class="col-auto">
                <label class="form-label" for="statpr">State Project:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="stateproject" id="statpr">
            </div>  
            <div class="col-auto">
                <label class="form-label" for="userid">User id:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="userid" id="userid">
            </div>  
            <div class="col-auto">
                <label class="form-label" for="comm">Comment:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="comment" id="comm">
            </div>
            <div class="col-auto">
                <label class="form-label" for="stat">State:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="state" id="stat">
            </div>  
            <div class="col-auto">
                <label class="form-label" for="idteam">Id Team:</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="number" name="idteam" id="idteam"><br>
            </div>
            
            <input class="btn btn-primary" type="submit" name="send" value="Add">
        <a href="index.php">Back</a>
        </div>
    </form>
    </div>
    
</body>
</html>