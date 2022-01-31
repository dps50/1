<?php
$FileName=$_FILES['fuResume']['name'];
$TmpName=$_FILES['fuResume']['tem_name'];
move_uploaded_file($TmpName,$FileName);
echo("FILE UPLOAD")
?>