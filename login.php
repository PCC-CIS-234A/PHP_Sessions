<?php
require_once "require_secure.php";

require_secure();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="do_login.php" method="post">
        <table>
            <tr><td style="text-align: right;">Username:</td><td><input name="username" type="text"></td></tr>
            <tr><td style="text-align: right;">Role:</td><td><input name="role" type="text"></td></tr>
            <tr><td style="text-align: right;" colspan=2><input type="submit" value="Log In"></td></tr>
        </table>
    </form>
</body>
</html>