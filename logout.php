<?php
//must appear BEFORE the <html> tag
session_start();
unset($_SESSION['login_user']);
unset($_SESSION['name']);
header("location: signin.php");
?>
</html>
