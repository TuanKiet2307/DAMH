<?php
    session_start();
    ob_start();
    require_once './mvc/Bridge.php';
    $app = new App();
?>