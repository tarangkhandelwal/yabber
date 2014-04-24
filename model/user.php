<?php

class User{
    public $name;
    public $email;
    public $password;
    public $profilePic;
    public $file;
    
    function __construct($name,  $password,$email, $profilePic, $file) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->profilePic = $profilePic;
        $this->file = $file;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getProfilePic() {
        return $this->profilePic;
    }

    public function setProfilePic($profilePic) {
        $this->profilePic = $profilePic;
    }

    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;
    }



    
}
?>
