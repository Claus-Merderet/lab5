<?php
session_start();
if (!$_SESSION['loggedin']) {
    header('Location: vhod.php');
}
