<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && !empty($_POST['username'])) {

    $username = trim($_POST['username']);
    $_SESSION['username'] = $username;

    header('Location: index.php');
    exit;
}