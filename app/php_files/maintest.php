<?php
/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 09.03.17
 * Time: 23:31
 */


class person {
    public $firstname;
    public $surname;
    public $number;
}

$person1 = new person();
$person1->firstname="iwona";
$person1->surname="lalak";
$person1->number=663011084;

$person2 = new person();
$person2->firstname="adam";
$person2->surname="kowalski";
$person2->number=121212121;

$person3 = new person();
$person3->firstname="jan";
$person3->surname="nowka";
$person3->number=999999999;

$list = array($person1,$person2,$person3);

echo json_encode($list);