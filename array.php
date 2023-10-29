<from action = "array.php" method = "GET"></from>
<input type="text" name = "xname">
<input type="submit">




<?php
$xname = $_GET["xname"];
echo $xname ;

//$family = array("Father", "Mother","Brother");
$family = ["Programmer"=> "Aziz",
 "Engineering" => "Mahmoud",
  "Student" => "Turki"];
///$family [1] = "LOve";
//$family [3] = "Sister";


 //echo $family [1];
 //echo $family [3];


 //echo count ($family);
echo $family[$xname];

?>