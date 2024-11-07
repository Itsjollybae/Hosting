<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "<p>Welcome, " . $_SESSION['username'] . "!</p>";
    echo '<a href="exit.php">Exit</a>';
} else {
    include 'index.html'; 
}