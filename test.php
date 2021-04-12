<?php

include_once("./vendor/database/users.php");
include_once("./vendor/database/advertisements.php");


$users = Users::getUsers();

print_r($users);

$ads = Advertisement::getAdvertisements();

echo "<br><br>";

print_r($ads);

?>