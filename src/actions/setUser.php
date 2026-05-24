<?php
    session_start();
    $_SESSION["taxIdCode"] = $_POST["taxIdCode"];
    $redirect = $_POST["redirect"];
    header("Location: ../pages/" . $redirect);
?>