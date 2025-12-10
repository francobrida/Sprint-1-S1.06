<?php
require_once "Student.php";

$newStudent = new Student();
echo $newStudent->__toString() . "<br>"
. $newStudent->__get("name");

?>