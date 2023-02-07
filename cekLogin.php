<?php
// jika belom login

if(isset($_SESSION['login'])){
}else{
    header('location:login.php');
}
?>