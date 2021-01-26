<?php 

setcookie("Academy", "Code", time() + 3600, "/", "orange.jo", TRUE, TRUE);
print_r($_COOKIE);

//set the expiration date to one hour ago(DELETE)
setcookie("user", "", time() - 3600);

?>