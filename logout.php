<?php
session_start();
session_unset();
session_destroy();
echo "<script> alert('已成功登出'); location.href='homepage.php';</script>";

?>