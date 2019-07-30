<?php

//Create a custom class that extends JSONObject:
use EasyJSON\JsonObject as JsonObject;

class Address extends JsonObject {

    private $road;
    private $number;
    private $state;
    private $country;

    public function __construct($road, $number, $state, $country) {
        $this->road = $road;
        $this->number = $number;
        $this->state = $state;
        $this->country = $country;
    }

    public function getRoad() {
        return $this->road;
    }

    public function setRoad($road) {
        $this->road = $road;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

}