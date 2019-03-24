<?php

$host = $_SERVER['HTTP_HOST'];
if ( $host == localhost ) 
   $home = file_get_contents('index-git.html'); 
else
   $home = file_get_contents('http://www.ambientelivre.com.br/saas/evento/sitepentahoday2019/index-git.html');
echo $home;
?>
