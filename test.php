<?php

include "vendor/database/advertisements.php";

print_r(Advertisement::getAdvertisements());

/*
include "autoload.php";

$host = getEnviroment("DB_HOST");
$name = getEnviroment("DB_NAME");
$username = getEnviroment("DB_USERNAME");
$password = getEnviroment("DB_PASSWORD");
$port = getEnviroment("DB_PORT");

echo "Host: $host<br>";
echo "Name: $name<br>";
echo "Username: $username<br>";
echo "Password: $password<br>";
echo "Port: $port";
*/

?>