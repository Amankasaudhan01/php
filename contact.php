<?php
$con=$mysqli_connect("localhost","your_localhost_database_user","your_localhost_database_password","your_localhost_database_db");
$con = mysqli_connect('localhost', 'root', '',�db_contact�);

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage');"
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}



>?
