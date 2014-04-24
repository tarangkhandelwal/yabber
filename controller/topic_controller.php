<?php

require_once 'model/topic_functions.php';

class TopicController{
    public $model;
    
    function __construct() {
               $this->model= new TopicFunctions();
    }
    
    
    function getAllTopics(){
        
        
          $topics=$this->model->getAlltopics();
          return $topics;
        
    }
    
     function getTopicByID($id){
         
         
        $topic= $this->model->getTopicByID($id);
         return $topic;
     }

    
    
}

?>
