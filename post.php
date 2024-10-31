<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    var_dump($_POST);

    $username = $_POST['username'];

    $_SESSION['username'] = $username;

    header(header: 'Location: index.php');
    exit;
}