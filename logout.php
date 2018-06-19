<!-- 後端 -->

<?php

session_start();
session_destroy();
header("location:newsweb.php");
?>