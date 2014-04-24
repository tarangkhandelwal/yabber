<?php
require_once('model/answer.php');
require_once('model/answer_functions.php');



class Answer_controller{
    
    public $model;
    
    function __construct() {
               $this->model= new AnswerFunction();
    }
    
function submit_answer($answer,$user_id,$question_id){
    $ans=new answer("", $answer, "", $user_id, $question_id);
    $this->model->submitAnswer($ans);
	
    }

function getAllAnswer($qid){
     $answers=$this->model->getAllAnswer($qid);
         return $answers;
    }
	function getAllAnswerNumber(){
     $answers=$this->model->getAllAnswerNumber();
         return $answers;
    }
function getAnswerNumberByEmail($email){
     $AnsNum=$this->model->getAnswerNumber($email);
         return $AnsNum;
    }
}

?>