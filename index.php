<?php
$conn=new PDO("mysql:host=localhost;dbname=bscs","root","");
$result=$conn->query("INSERT INTO `students` (`sid`, `name`, `pno`, `cgpa`) VALUES (NULL, 'Afnan', '03111', '2.5')");

// echo "Sid\tStudentName\tPhone No.\tCGPA <br>";
while($row=$result->fetch()){
  
  echo "{$row['sid']}\t{$row['name']}\t{$row['pno']}\t{$row['cgpa']}\t<br>";
}

?>