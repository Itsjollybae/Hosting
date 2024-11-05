<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "<p>Welcome, " . $_SESSION['username'] . "!</p>";
} else {
    include 'index.html'; 
}