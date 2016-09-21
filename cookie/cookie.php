<?php
setcookie("user", "runoob", time()+3600);

?>
<?php 
echo $_COOKIE["user"];
?>

