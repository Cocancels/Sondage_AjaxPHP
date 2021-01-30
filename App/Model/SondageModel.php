<?php

namespace App\Model;

use Core\Database;

class SondageModel extends Database
{

    public function sondages()
    {

        $sondages = $this->getSondages();

        foreach($sondages as $sondage){
            $sondage->questions = $this->getQuestion($sondage->id);
            foreach($sondage->questions as $question){
                $question->reponses = $this->getReponse($question->id);
            }
        };
        

        return $sondages;
    }

    function setReview($idReponse)
    {
        $this->prepare("UPDATE sondage_reponses SET vote = vote + 1 WHERE id='$idReponse'");
    }

    function getSondages()
    {
        $sondage = $this->query("SELECT * FROM sondage");
        return $sondage;
    }

    function getSondage($titre)
    {
        $sondage = $this->query("SELECT * FROM sondage WHERE titre='$titre'");
        return $sondage;
    }

    function getReponse($idQuestion)
    {
        $sondage = $this->query("SELECT * FROM sondage_reponses WHERE id_question='$idQuestion'");
        return $sondage;
    }

    function getQuestion($idSondage)
    {
        $question = $this->query("SELECT * FROM sondage_questions WHERE id_sondage='$idSondage'");
        return $question;
    }

    function getQuestions()
    {
        $question = $this->query("SELECT * FROM sondage_questions");
        return $question;
    }

    function getReponses()
    {
        $reponses = $this->query("SELECT * FROM sondage_reponses");
        return $reponses;
    }
}
