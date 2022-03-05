<?php
if (!isset($_SESSION['login_done'])) {
    header('location:/protfolio/login.php');
}
?>