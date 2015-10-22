<?php

session_start();
unset($_SESSION["idPersonne"]);
unset($_SESSION["level"]);
session_destroy();
session_unset();
setcookie('idPersonne','',time()+3600*24*3,'/','group1.estiam.com',false, true);
header("location:index.php");

?>