
<?php
 $connect=mysqli_connect("localhost","root","","school");
 $output="BIRTH INFORMATION \n\n";
 $q=mysqli_query($connect,"SELECT upper(person.names) as 
 STUDENT_NAMES,upper(dob.province) AS PROVINCE,upper(dob.district)
  AS DISTRICT,upper(dob.sector) AS SECTOR,upper(dob.cell) AS CELL,upper(dob.village)
   AS VILLAGE FROM person,dob WHERE person.sid=dob.sid;");
$table="person";
$file="Birth Details ";
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