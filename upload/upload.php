<?php
$tmp_file_name = $_FILES['Filedata']['tmp_name'];
$ok = move_uploaded_file($tmp_file_name, $_FILES['Filedata']['name']);

// This message will be passed to 'oncomplete' function
echo $ok ? $_FILES['Filedata']['name'] : "FAIL";

?>