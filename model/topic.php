<?php

class Topic{
    
    
public $id;
public $title;
public $description;

function __construct($id, $title, $description) {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
}


public function getId() {
    return $this->id;
}

public function getTitle() {
    return $this->title;
}

public function getDescription() {
    return $this->description;
}

public function setId($id) {
    $this->id = $id;
}

public function setTitle($title) {
    $this->title = $title;
}

public function setDescription($description) {
    $this->description = $description;
}



    
    
    
}
?>
