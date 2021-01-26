<!DOCTYPE html>
<html>
<body>
<?php
function getProjectName()
{
    $project = explode('/', $_SERVER['SCRIPT_NAME'])[1];
    return  $project;
}


echo getProjectName();
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
</body>
</html>
