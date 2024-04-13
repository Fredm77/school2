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
        margin-bottom: 10%;
        margin-top: 3%;
    }
    .btn{
        display: flex;
        padding: 5px 100px;
        width: 27%;
        text-align: center;
    }
    </style>
</head>

<body>
 <form action="export2.php" method="post">
 <center><h4 style="padding-top:7%;">Click on the button to download the file</h4></center>
          <div class="row">
            <div class="col-md-12">
            <button class="btn btn-primary" name="export" >Personal Information</button>
            </div>
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="export2" style="margin-top:2%;">Parent Information</button>
                </div>
                <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="export3" style="margin-top:2%;">Birth Details</button>
                </div>
                <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="export4" style="margin-top:2%;">Residence Details</button>
                </div>
                <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="export5" style="margin-top:2%;">Previous School</button>
                </div>
                <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="export5" style="margin-top:2%;">Visitors(Visiting Card)</button>
                </div>
           </div>

 </form>
    

    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
if(isset($_POST["export"])){
    ?><script> window.location.href="export_person.php"</script><?php
}
if(isset($_POST["export2"])){
    ?><script> window.location.href="export_them.php"</script><?php
}
if(isset($_POST["export3"])){
    ?><script> window.location.href="export_dob.php"</script><?php
}
if(isset($_POST["export4"])){
    ?><script> window.location.href="export_dor.php"</script><?php
}
if(isset($_POST["export5"])){
    ?><script> window.location.href="choose_visitor.php"</script><?php
}
?>
