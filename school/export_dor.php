
<?php
 $connect=mysqli_connect("localhost","root","","school");
 $output="INFORMATION OF RESIDENCE \n\n";
 $q=mysqli_query($connect,"SELECT upper(person.names) AS STUDENT_NAMES,upper(residence.district) AS
  DISTRICT,upper(residence.sector) AS SECTOR,upper(residence.cell) 
  AS CELL,upper(residence.village) AS VILLAGE,upper(information.insurance)
   AS INSURANCE,upper(information.religion) AS RELIGION FROM 
   person,residence,information WHERE person.sid=residence.sid and person.sid=information.sid;");
$table="person";
$file="Residence_details ";
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