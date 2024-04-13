
<?php
 $connect=mysqli_connect("localhost","root","","school");
 $output="PRENTHOOD INFORMATION \n\n";
 $q=mysqli_query($connect,"SELECT upper(person.names) AS STUDENT_NAME,
 upper(fathers.fname) AS FATHER_NAME,upper(mothers.mname) AS MOTHER_NAME,guardian.gname AS GUARDIAN_NAME FROM person,fathers,mothers,guardian WHERE
  person.sid=fathers.sid AND person.sid=mothers.sid and person.sid=guardian.sid;");
$table="person";
$file="Parent_information ";
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