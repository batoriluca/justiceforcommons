<?php
// this code will secure the admin panel if username is not set then it will redrict to login page
if(!$_SESSION['username']){
    header('Location: login');
};
?>