<?php

namespace App\Model;

use Core\Database;

class AdminModel extends Database
{

    function getSondage($titre)
    {
        $sondage = $this->query("SELECT * FROM sondage WHERE titre='$titre'");
        return $sondage;
    }

    function getQuestion($idSondage)
    {
        $question = $this->query("SELECT * FROM sondage_questions WHERE id_sondage='$idSondage'");
        return $question;
    }

    function setSondage($titre)
    {
        $this->prepare("INSERT INTO sondage (titre) VALUES ('$titre')");
    }

    function setQuestion($idSondage, $question)
    {
        $this->prepare("INSERT INTO sondage_questions (id_sondage, titre) VALUES ('$idSondage', '$question')");
    }

    function setReponse($idQuestion, $reponse)
    {
        $this->prepare("INSERT INTO sondage_reponses (id_question, reponse, vote) VALUES ('$idQuestion', '$reponse', '0')");
    }

    function getSondages()
    {
        $sondages = $this->query("SELECT * FROM sondage");
        return $sondages;
    }

    function getQuestions()
    {
        $questions = $this->query("SELECT * FROM sondage_questions");
        return $questions;
    }

    function getReponses()
    {
        $reponses = $this->query("SELECT * FROM sondage_reponses");
        return $reponses;
    }
    
}
