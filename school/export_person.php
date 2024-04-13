
<?php
 $connect=mysqli_connect("localhost","root","","school");
 $output="STUDENTs INFORMATION \n\n";
 $q=mysqli_query($connect,"SELECT upper(person.names) AS NAMES,upper(person.gender) 
 AS GENDER,person.dob AS BIRTHDATE,upper(person.nationality) AS NATIONALITY,person.disability AS DISABILITY FROM person;");
$table="person";
$file="Student_information ";
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
