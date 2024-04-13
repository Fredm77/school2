<?php
session_start();
@$sid=$_SESSION["sid"];
 $connect=mysqli_connect("localhost","root","","school");
 $q2=mysqli_query($connect,"select * from person where person.sid='$sid';");
 $row2=mysqli_fetch_array($q2);
 $name=$row2["names"];
 $output=strtoupper($row2["names"])."\n\n";
 $q=mysqli_query($connect,"SELECT upper(names) AS NAMES,upper(relation) AS RELATION FROM vistors WHERE sid='$sid';");
$table="person";
$file="Visiting card of '$name' ";
$columns=mysqli_num_fields($q);
for($i=0;$i<$columns;$i++){
    $heading=mysqli_fetch_field_direct($q,$i);
    $output.='"'.$heading->name.'",';
}
$output.="\n";
while($row=mysqli_fetch_array($q)){
    for($i=0;$i<$columns;$i++){
        $output.='"'.$row["$i"].'",';
    }
    $output.="\n";
}
$time=date("ymdHis");
$file.=$time.".csv";
header('content-type:application/csv');
header('content-disposition:attachment;;filename='.$file);
echo $output;
exit;
?>