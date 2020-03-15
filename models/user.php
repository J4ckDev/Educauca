<?php
class user{
    public $name; 
    public $surname;
    public $age;
    public $email;
    public $pass;
    public $code;
    public $discapacidad;
    public $rol;

    function __construct($name,$surname,$age,$email,$pass,$code,$discapacidad,$rol) {
        $this->$name; 
        $this->$surname;
        $this->$age;
        $this->$email;
        $this->$pass;
        $this->$code;
        $this->$discapacidad;
        $this->$rol;
    }

    //Gets
    function getName() {
        return $this->name;
    }
    function getSurname() {
        return $this->surname;
    }
    function getAge() {
        return $this->age;
    }
    function getEmail() {
        return $this->email;
    }
    function getPass() {
        return $this->pass;
    }
    function getCode() {
        return $this->code;
    }
    function getDiscapacidad() {
        return $this->discapacidad;
    }
    function getRol() {
        return $this->rol;
    }

    //Sets
    function setName($val) {
        $this->name = $val;
    }
    function setSurname($val) {
        $this->surname = $val;
    }
    function setAge($val) {
        $this->age = $val;
    }
    function setEmail($val) {
        $this->email = $val;
    }
    function setPass($val) {
        $this->pass = $val;
    }
    function setCode($val) {
        $this->code = $val;
    }
    function setDiscapacidad($val) {
        $this->discapacidad = $val;
    }
    function setRol($val) {
        $this->rol = $val;
    }
}