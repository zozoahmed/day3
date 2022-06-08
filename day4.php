<?php
//task day4

$cars = array
  (
  array("logan",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Rover",17,15)
  );
 
echo "Accessing the elements of the array.<br><br>" ;
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br><br>";
echo "Looping through the array.<br><br>";
 
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
	echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
























//  if($_SERVER['REQUEST_METHOD'] =='GET'){

//     $nam  =$_REQUEST['name'];
//     $email =$_GET['email'];

//     echo $name. ' || '. $email. '  || ';

//  }
$error =[];

if(empty($name)){
    $error['NAME'] = "Required";

}
if(empty($email)){
    $error['EMAIL'] = "Required";
}

if(count($error) > 0){
    foreach ($error as $key => $value ){
        echo $key. ' : '.$value."<br>";
    }
}
else{
    echo "valid name /email";
}
?>