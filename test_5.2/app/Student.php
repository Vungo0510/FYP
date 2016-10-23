<?php

namespace App;

class Student{

private var $userID;
private var $deviceUID;
private var $email;
private var $password;

    public function Student($userID, $deviceUID, $email, $password){
        $this->userID = $userID;
        $this->deviceUID = $deviceUID;
        $this->email = $email;
        $this->password = $password;
    }


    public function getUserID(){
        return $this->userID;
    }
    public function getDeviceUID(){
        return $this-> deviceUID;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setUserID($userID){
        $this->userID = $userID;
    }
    public function setDeviceUID($deviceUID){
        $this->deviceUID = $deviceUID;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }


}

?>