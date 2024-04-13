<?php
session_start();
@$sid=$_SESSION["sid"];
?>
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
        .login{
        color: white;
        background-color: #2691d9;
        background-size: 200px;
        border-radius: 10px;
        border: none;
        padding: 2px 3%;
        width: 27%;
        font-size: 24px;
        margin: 10px -5px;
    }
    </style>
</head>

<body>
<?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT person.names,person.gender,address.email,person.dob,person.nationality,address.official,address.official_num,person.disability 
                           FROM person,address WHERE person.sid=address.sid and person.sid=$sid;");
                            if($q){

                            }
                            else{
                                echo "<script>alert('Your ID is not correct')</script>";
                               ?> <script>window.location.href = "admin2.php";</script><?php
                            }
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                             <center><h4 style="padding-top: 2%;"> Welcome to the details of <span style="font-weight: bold;font-size:120%;"><?php echo $data['names']?></span></h4></center>
                          <?php } ?>
                          <center><h6 style="padding-top: 2%;">Person Information</h6></center>
    
  <center>

  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th>Names</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Date Of Birth</th>
      <th>Nationality</th>
      <th>Official Paper</th>
      <th>Official Paper Number</th>
      <th>Disability</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT person.names,person.gender,address.email,person.dob,person.nationality,address.official,address.official_num,person.disability 
                           FROM person,address WHERE person.sid=address.sid and person.sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo strtoupper($data['names'])?></td>
                            <td><?php echo $data['gender']?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['dob']?></td>
                            <td><?php echo strtoupper($data['nationality'])?></td>
                            <td><?php echo strtoupper($data['official'])?></td>
                            <td><?php echo $data['official_num']?></td>
                            <td><?php echo $data['disability']?></td>
                          
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Parenthood</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th></th>
      <th>Name</th>
      <th>ID</th>
      <th>Telephone</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT fname,fnid,ftel from fathers WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <b><td style="font-weight: bold;">Father</td></b>
                            <td><?php echo strtoupper($data['fname'])?></td>
                            <td><?php echo $data['fnid']?></td>
                            <td><?php echo $data['ftel']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q2=mysqli_query($connect,"SELECT mname,mnid,mtel FROM mothers WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q2))
                           {
                          
                          ?>
                            <tr>
                            <b><td  style="font-weight: bold;">Mother</td></b>
                            <td><?php echo strtoupper($data['mname'])?></td>
                            <td><?php echo $data['mnid']?></td>
                            <td><?php echo $data['mtel']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT gname,gnid,gtel FROM guardian WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <b><td  style="font-weight: bold;">Guardian</td></b>
                            <td><?php echo strtoupper($data['gname'])?></td>
                            <td><?php echo $data['gnid']?></td>
                            <td><?php echo $data['gtel']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Details Of Birth</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th>Province</th>
      <th>District</th>
      <th>Sector</th>
      <th>Cell</th>
      <th>Village</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"select * from dob where sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo strtoupper($data['province'])?></td>
                            <td><?php echo strtoupper($data['district'])?></td>
                            <td><?php echo strtoupper($data['sector'])?></td>
                            <td><?php echo strtoupper($data['cell'])?></td>
                            <td><?php echo strtoupper($data['village'])?></td>
                          
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Details of Residence and other information</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
      <th>District</th>
      <th>Sector</th>
      <th>Cell</th>
      <th>Village</th>
      <th>Insurance</th>
      <th>Religion</th>
      <th>Sport</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT residence.district,residence.sector,residence.cell,residence.village,information.insurance,information.religion,information.sport 
                           FROM
                            residence,information WHERE residence.sid=information.sid	 AND residence.sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo strtoupper($data['district'])?></td>
                            <td><?php echo strtoupper($data['sector'])?></td>
                            <td><?php echo strtoupper($data['cell'])?></td>
                            <td><?php echo strtoupper($data['village'])?></td>
                            <td><?php echo strtoupper($data['insurance'])?></td>
                            <td><?php echo strtoupper($data['religion'])?></td>
                            <td><?php echo strtoupper($data['sport'])?></td>
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Previous School and Sponsorship</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
      <th>District</th>
      <th>Sector</th>
      <th>School Name</th>
      <th>Class</th>
      <th>Ac Year</th>
      <th>Aggregates</th>
      <th>Reg Number</th>
      <th>Sponsorship</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT prev_school.district,prev_school.sector,prev_school.schoolName,prev_school.class,prev_school.aYear,prev_school.agg,reg_number.reg_num,sponsorship.stype 
                           FROM prev_school,sponsorship,reg_number 
                           WHERE prev_school.sid=sponsorship.sid and prev_school.sid=reg_number.sid AND prev_school.sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo strtoupper($data['district'])?></td>
                            <td><?php echo strtoupper($data['sector'])?></td>
                            <td><?php echo strtoupper($data['schoolName'])?></td>
                            <td><?php echo strtoupper($data['class'])?></td>
                            <td><?php echo strtoupper($data['aYear'])?></td>
                            <td><?php echo strtoupper($data['agg'])?></td>
                            <td><?php echo strtoupper( $data['reg_num'])?></td>
                            <td><?php echo strtoupper($data['stype'])?></td>
                          
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Visitors</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th>Names</th>
      <th style="width: 20%;">Relation</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT names,relation FROM vistors WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo strtoupper($data['names'])?></td>
                            <td><?php echo strtoupper($data['relation'])?></td>
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
<br><br>
<div class="row">

<form action="admin3.php" method="post">
<center><input type="submit" value="Home" name="home" class="login"></center>
<center><input type="submit" value="Delete the Student" name="login" class="login"></center>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST["login"])){
    $connect=mysqli_connect("localhost","root","","school"); 
    $q=mysqli_query($connect,"delete from person where sid=$sid");
    $q2=mysqli_query($connect,"delete from dob where sid=$sid");
    $q3=mysqli_query($connect,"delete from address where sid=$sid");
    $q4=mysqli_query($connect,"delete from information where sid=$sid");
    $q5=mysqli_query($connect,"delete from fathers where sid=$sid");
    $q6=mysqli_query($connect,"delete from mothers where sid=$sid");
    $q7=mysqli_query($connect,"delete from guardian where sid=$sid");
    $q8=mysqli_query($connect,"delete from prev_school where sid=$sid");
    $q9=mysqli_query($connect,"delete from residence where sid=$sid");
    $q10=mysqli_query($connect,"delete from sponsorship where sid=$sid");
    $q11=mysqli_query($connect,"delete from vistors where sid=$sid");
    $q11=mysqli_query($connect,"delete from reg_number where sid=$sid");

    if($q and $q2 and $q3 and $q4 and $q5 and $q6 and $q7 and $q8 and $q9 and $q10 and $q11 and $q12){
        echo "<script>alert('Student Deleted Successfully')</script>";
        ?><script>window.location.href="back.php";</script><?php
    }
    else{
        echo "<script>alert('Error occured')</script>";
    }
}
if(isset($_POST["home"])){
 ?><script>window.location.href="back.php";</script><?php
}
?>