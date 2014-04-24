<?php
require_once('model/question.php');
require_once('model/question_functions.php');

class QuestionController{
    public $model;
    
    function __construct() {
               $this->model= new QuestionFunctions();
    }

    
    function addNewQuestion($content, $user_id, $date, $topic_id, $likes){
        
      
          $question= new question("",$content, $user_id, $date, $topic_id, $likes);
        $this->model->addNewQuestion($question);
        
    }
    
      function getAllQuestions(){
     
        
        $questions=$this->model->getAllQuestions();
         return $questions;
        
    }
	function getAllQuestionsByTopic($topicid){
     
        
        $questions=$this->model->getAllQuestionsByTopic($topicid);
         return $questions;
        
    }
	function getMostResponse(){
     
        
        $questions=$this->model->getMostResponse();
         return $questions;
        
    }
	function getNoResponse(){
     
        
        $questions=$this->model->getNoResponse();
         return $questions;
        
    }
    
	
	function getRecentlyAnswered(){
     
         $questions=$this->model->getRecentlyAnswered();
         return $questions;
        
    }
    
      function getQuestionByID($qid){
          
           $question=$this->model->getQuestionByID($qid);
          return $question;
          
      }
    function getQuestionsNumber($email){
          
           $questionNum=$this->model->getQuestionsNumber($email);
          return $questionNum;
          
      }
	  function getAllQuestionsNumber(){
          
           $questionNum=$this->model->getAllQuestionsNumber();
          return $questionNum;
          
      }
	  
	  
	   function getTotalAnswersByQid($qid){

		      $total=$this->model->getTotalAnswersByQid($qid);
       	   return $total;
		   
		   }
	  
    
}

?>
