<?php
    require_once __DIR__. '/config.php';

    $db_connection = mysqli_connect(
        HOST,
        USERNAME,
        PASSWORD,
        DB_NAME
    );