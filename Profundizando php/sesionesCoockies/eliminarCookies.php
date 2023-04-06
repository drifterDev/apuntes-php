<?php
if (isset($_COOKIE['migalleta'])){
unset($_COOKIE['migalleta']);
setcookie('migalleta', "", time()-100);
}
if (isset($_COOKIE['unyear'])){
unset($_COOKIE['unyear']);
setcookie('unyear', "", time()-100);
}
header('location:verCookies.php');
?>