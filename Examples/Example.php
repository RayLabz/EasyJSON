<?php

//Import:
require_once("..\src\EasyJSON.php");

use EasyJSON\JsonObject as JsonObject;

//Take a look at files Address.php and Person.php to see how classes can be created by extending the JsonObject class.

//Import your custom class:
require_once("Address.php");

//Instantiate an object of class Address:
$address = new Address("myRoad", 10, "myState", "myCountry");

//echo $address->toJson();

require_once("Person.php");
$person = new Person("John", "Doe", $address);

//echo $person->toJson();

//Create second person and assign it as a friend to the first person:
$person2 = new Person("Jane", "Jones", $address);
$person->addFriend($person2);
//echo $person->toJson();

//Lets also add another person in the array:
$person3 = new Person("George", "Michaels", $address);
$person->addFriend($person3);

echo $person->toJson();