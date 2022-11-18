<?php
require_once "require_secure.php";

require_secure();
session_start();
$current_user = (isset($_SESSION['username']) ? $_SESSION['username'] : "&lt;unknown&gt;");
$current_role = (isset($_SESSION['role']) ? $_SESSION['role'] : "&lt;no role&gt;");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>You are currently logged in as <b><?php echo $current_user; ?></b> with role: <b><?php echo $current_role; ?></b>.</p>
    <h2>Demonstration:</h2>
    <ol>
        <li>First, <a href="login.php">login to create a new session</a>. You will be returned to the homepage.</li>
        <li>You can also open an incognito window to <a href="index.php">the homepage</a> to see that you are not logged in there (right click on the link and open in an incognito window).</li>
        <li>You can log into a different account in the incognito window without affecting the logged-in user in this window.</li>
        <li>Finally, <a href="logout.php">logout</a> to destroy the session. You will be returned to the homepage.</li>
    </ol>
</body>
</html>
