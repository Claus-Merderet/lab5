<?php
if (!empty($_POST['log'])) {
    unset($_SESSION['loggedin']);
    session_destroy();
    header('Location: index.php');
}