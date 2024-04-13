
<?php
 $connect=mysqli_connect("localhost","root","","school");
 $output="PREVIOUS SCHOOL INFORMATION \n\n";
 $q=mysqli_query($connect,"SELECT upper(person.names) AS 
 NAMES,upper(prev_school.district) AS DISTRICT,upper(prev_school.sector) AS 
 SECTOR,upper(prev_school.schoolName) AS SCHOOLNAME,upper(prev_school.class) AS 
 CLASS,upper(prev_school.aYear) AS AC_YEAR,upper(prev_school.agg) AS 
 AGT,upper(information.sport) AS SPORT FROM person,prev_school,information 
 WHERE person.sid=prev_school.sid and person.sid=information.sid;");
$table="person";
$file="Previous_school ";
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