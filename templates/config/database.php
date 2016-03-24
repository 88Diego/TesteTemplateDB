<?php

define('HOST_DB','127.0.0.1');
define('USUARIO_DB','root');
define('SENHA_DB','');
define('NOME_DB','pi2_db');


$db_conn = mysqli_connect(HOST_DB, USUARIO_DB, SENHA_DB, NOME_DB);

echo "<pre>";
print_r ($db_conn);

if (!$db_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($db_conn) . PHP_EOL;

mysqli_close($db_conn);

?>