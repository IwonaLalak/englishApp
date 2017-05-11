<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 29.04.17
 * Time: 16:25
 */


/*
require_once 'entities/User.php';
require_once 'database/Connection.php';


echo "bbb";

    echo '<ul>';

    $sql = "SELECT * FROM users";
    $con = Connection::getInstance();
    $stmt = $con->handle->query($sql);

        while($row = $stmt->fetch())
        {
            echo '<li style="background:lime">'.$row['login'].'</li>';
        }

    echo '</ul>';

        echo "--------- </br>";*/

require_once 'testService.php';
require_once 'testClass.php';

echo "<h2>test</h2>";

$service = new testService();

echo $service->saySomething();
/*
$result = $service->getUsers();

echo "<ul>";

$i = 1;

while ($row = $result->fetch()) {
    echo '<li style="background:lime">' . $i . ' - ' . $row['login'] . '</li>';
    $i++;
    if ($i > 50) break;
}

echo "</ul>";
echo "<ul>";
$result2 = $service->getUsersEmails();

$i = 1;

while ($row = $result2->fetch()) {
    echo '<li style="background:lime">' . $i . ' - ' . $row['email'] . '</li>';
    $i++;
    if ($i > 50) break;
}

echo "</ul>";

$result3 = $service->getById("1");
$data = $result3->fetch();

echo "<p>user: " . $data['login'] . " " . $data['email'] . '</p>';*/

$usr = new testClass();
$usr->setLogin("eee");
$usr->setPassword(md5("eee"));

echo "<p>dodawanie nowego usera</p>";
$res4 = $service->addNewUser($usr);
echo "res: ".$res4;

echo "aaaaaa";
/*echo $res4->errorInfo();
$res = $res4->fetch();
echo "res: ".$res;
echo "res4: ".$res4;

if ($res == TRUE) echo "tak";
else echo "nie";*/

