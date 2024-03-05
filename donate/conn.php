<?php
    // Database connection credentials
    $hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
    $database = 'huwesdio_db'; // specify database name on localhost, huwesdi
    $db_user = 'huwesdio_db'; // specify username on localhost = root
    $db_pass = 'huwesdio_db'; // specify password on localhost = ''
    $conn = mysqli_connect("$hostname" , "$db_user" , "$db_pass", "$database");