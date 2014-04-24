<?php

class answer{
    
    public $id;
    public $content;
    public $date;
    public $user_id;
    public $question_id;
    
    function __construct($id, $content, $date, $user_id, $question_id) {
        $this->id = $id;
        $this->content = $content;
        $this->date = $date;
        $this->user_id = $user_id;
        $this->question_id = $question_id;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function getQuestion_id() {
        return $this->question_id;
    }

    public function setQuestion_id($question_id) {
        $this->question_id = $question_id;
    }



    
    
    
    
}
?>
