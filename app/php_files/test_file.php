<?php

echo "<p>test</p>";

require_once "services/userService.php";
require_once "classes/User.php";

$service = new userService();
$service->saySomething();
/*
$result = $service->getAllUsers();
if (!$result) {
    echo "brak wynikow";
} else {
    foreach ($result as $key) {
        echo "user: ";
        echo $key["user_id"] . " - ";
        echo $key["login"] . "<br/>";
    }
}
echo "<br/>";

$result2 = $service->getUserById(1);
if (!$result2) echo "brak takiego";
else {
    echo $result2["login"];
}

echo "<br/> --- <br/>";
$result_to_3 = $service->checkIfUserExist("newuser2");
echo "wynik: " . $result_to_3 . "<br/>";
if (!$result_to_3) {
    $result3 = $service->register("newuser2", "newuser2");
    echo "registered? " . $result3;
} else {
    echo "juz istnieje";
}

echo "<br/> --- <br/>";

$result4 = $service->updatePassword(65, "troslolo");
if ($result4) echo "updated";
else echo "error by updating";*/

