<?php
require_once "require_secure.php";

require_secure();
session_start();
if (isset($_POST['username']))
    $_SESSION['username'] = $_POST['username'];
if (isset($_POST['role']))
    $_SESSION['role'] = $_POST['role'];
header("Location: index.php");
