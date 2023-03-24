<?php
session_start();

session_destroy();
//untuk menghapus nilai pada session

header("location:index.php");
?>