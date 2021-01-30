<?php

namespace App\Controller;

use App\Model\AdminModel;
use mysqli;

class AdminController
{



    public function __construct()
    {
        $this->model = new AdminModel();
    }

    //Affiche la page admin
    public function render()
    {
        $sondages = $this->model->getSondages();
        $questions = $this->model->getQuestions();
        $reponses = $this->model->getReponses();

        require ROOT . "/App/view/admin/admin.php";
    }

    //Créé un sondage
    public function createSondage()
    {
        if (isset($_POST['formQuestions'])) {
            $titre = $_POST['titre'];
            $this->model->setSondage($titre);
            for ($i = 1; $i <= 4; $i++) {
                if (!empty($_POST['question' . $i])) {
                    $question = $_POST['question' . $i];
                    $sondage = $this->model->getSondage($titre);
                    $idSondage = $sondage[0]->id;
                    $this->model->setQuestion($idSondage, $question);
                    $question = $this->model->getQuestion($idSondage);
                    for ($j = 1; $j <= 4; $j++) {
                        if (!empty($_POST['question' . $i . 'reponse' . $j . 'value'])) {
                            $reponse = $_POST['question' . $i . 'reponse' . $j . 'value'];

                            $this->model->setReponse($question[$i - 1]->id, $reponse);
                        } else {
                            break;
                        }
                    }
                } else {
                    break;
                }
            }
        }
        require ROOT . "/App/view/admin/createSondage.php";
    }
}
