<?php

class question{
    public $question_id;
    public $content;
    public $user_id;
    public $date;
    public $topic_id;
    public $likes;
    
    
    function __construct($question_id, $content, $user_id, $date, $topic_id, $likes) {
        $this->question_id = $question_id;
        $this->content = $content;
        $this->user_id = $user_id;
        $this->date = $date;
        $this->topic_id = $topic_id;
        $this->likes = $likes;
    }
    
    
    public function getQuestion_id() {
        return $this->question_id;
    }

    public function setQuestion_id($question_id) {
        $this->question_id = $question_id;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getTopic_id() {
        return $this->topic_id;
    }

    public function setTopic_id($topic_id) {
        $this->topic_id = $topic_id;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function setLikes($likes) {
        $this->likes = $likes;
    }




    
    
}

?>
