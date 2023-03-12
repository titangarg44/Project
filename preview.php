<?php 
require_once('config_reg.php');
echo $reg_no=$_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reg.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1">
                <div class="col-sm-10" style="border:2px solid black; padding:10px;">
                <?php
                $sql="SELECT * registrations WHERE reg_no=:reg_no";
                 $stmt = $db->prepare($sql);
                   $stmt->bindParam(':reg_no',$reg_no, PDO::PARAM_STR);
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>