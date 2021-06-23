<html>
<body>



<?php
$connection= new mysqli("localhost","root" ,"","arm control");
$stmt = $connection->prepare("select * from engine getLastRecord ORDER BY id DESC LIMIT 1 ");
$stmt -> execute();


$result = $stmt-> get_result();

while($row =$result-> fetch_assoc()){
echo "  Base =" .$row["Base"]."</br>" ;

echo "Shoulders=" .$row["Shoulders"] ."</br>" ;

echo "Elbow=" . $row["Elbow"] ."</br>" ;

echo  "Wrist=" . $row["Wrist"] ."</br>";

echo "Gripper=" .  $row["Gripper"] ."</br>" ;

echo "Engine=" .  $row["Engine"] ."</br>" ;


}

?>
<html>
<body>