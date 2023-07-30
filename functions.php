<?php
echo "FUNCTIONS";
echo "<br>";
echo "<br>";

function processMarks($marksArr){
   $sum=0;
    for ($i=0;$i<count($marksArr);$i++){
        $sum=$sum+$marksArr[$i];
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum=0;
    $avg=0;
    for ($i=0;$i<count($marksArr);$i++){
        $sum=$sum+$marksArr[$i];
    }
    $avg=($sum/600);
    return $avg;
}
$rohan= [93,34,35,75,83,45];
$sumMarks=processMarks($rohan);
$avgMarks_1=avgMarks($rohan);
$pratik=[12,43,5,2,41,5];
$sumMarks_pratik=processMarks($pratik);
$avgMarks_2=avgMarks($pratik);
echo "total marks is of Harry ".$sumMarks;
echo "<br>";
echo "total marks is of Pratik ".$sumMarks_pratik;
echo "<br>";
echo "avg marks is of Pratik ".$avgMarks_2;
?>