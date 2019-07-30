<?php

use EasyJSON\JsonObject;

class Component extends JsonObject {

    private $cost;

    /**
     * Component constructor.
     * @param $cost
     */
    public function __construct($cost) {
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost) {
        $this->cost = $cost;
    }

}

class Engine extends  JsonObject {

    private $name;
    private $components = array();

    /**
     * Engine constructor.
     * @param $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    public function getComponents() {
        return $this->components;
    }

    public function addComponent($component) {
        array_push($this->components, $component);
    }

}

class Car extends JsonObject implements \EasyJSON\JsonSerializable {

    private $model;
    private $engine;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     */
    public function __construct($model, $engine) {
        $this->model = $model;
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model) {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getEngine() {
        return $this->engine;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function toJSON() {
        return json_encode($this->toJsonObject());
    }
}