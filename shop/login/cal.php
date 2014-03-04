<?php
session_start();
if($_SESSION['s_var']==1)
 echo 'hello';
else
 echo 'hi';
?>