<?php
require_once "require_secure.php";

require_secure();
session_start();
$_SESSION = [];
session_destroy();
header("Location: index.php");
