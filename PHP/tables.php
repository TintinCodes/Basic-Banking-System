<?php
$sql = "CREATE TABLE `tsfbank`.`transfer_history`
( `sender` VARCHAR(20) NOT NULL , 
 `receiver` VARCHAR(20) NOT NULL , 
 `amount` DECIMAL NOT NULL )";

if ($conn->query($sql) === TRUE) {
 //echo "Table created successfully";
} else {
 echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE `tsfbank`.`Customer`
( `sno` INT NOT NULL AUTO_INCREMENT , 
 `name` VARCHAR(30) NOT NULL , 
  `email` VARCHAR(50) NOT NULL , 
   `balance` INT NOT NULL , 
      PRIMARY KEY  (`sno`))";

if ($conn->query($sql) === TRUE) {
 //echo "Table created successfully<br>";
 echo"<br>";
} else {
 echo "Error creating table: " . $conn->error;
 echo "<br>";
?>