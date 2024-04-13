<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E SC BYIMANA | Registration Form</title>
    <link rel="icon" style="width:300%;height:200%;" href="byimanalogo.png">
    <!-- Include Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body{
        overflow: hidden;
    }
    .row{
        flex-direction: column;
        position: relative;
        width: 100%;
        margin-left: 37%;
        margin-right: 30%;
        margin-top: 3%;
    }
    .btn{
        display: flex;
        padding: 5px 100px;
        width: 50%;
    }
    </style>
</head>

<body>
 <form action="admin4.php" method="post">
 <center><h3 style="padding-top:7%;">Click on the button to download the file</h3></center>
          <div class="row">
            <div class="col-md-6">
            <button type="submit" class="btn btn-primary" name="submit" >Verify Student</button>
            </div>
            <div class="col-md-6">
            <button type="submit" class="btn btn-primary" name="submit2" style="margin-top:3.7%;">Download Files</button>
                </div>
           </div>

 </form>
    

    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
    ?><script> window.location.href="admin2.php"</script><?php
}
?>
