<?php
    session_start();
    session_destroy();
    header("Location: ?controller=path&action=index");
?>
