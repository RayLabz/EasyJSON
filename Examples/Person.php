<?php

use EasyJSON\JsonObject as JsonObject;

class Person extends JsonObject {

    private $firstName;
    private $lastName;
    private $address; //This property should contain an object of type Address.
    private $friends;

    public function __construct($firstName, $lastName, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->friends = array();
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }


    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getFriends() {
        return $this->friends;
    }

    public function addFriend($friend) {
        array_push($this->friends, $friend);
    }

    public function toJSON() {
        return json_encode($this->toJsonObject());
    }
}