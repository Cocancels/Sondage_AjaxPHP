<?php

namespace App\Controller;

use App\Model\SondageModel;

class SondageController
{

    public function __construct()
    {
        $this->model = new SondageModel();
    }

    public function sondage()
    {

        require ROOT . "/App/view/home/sondage.php";
    }


    public function getData()
    {
        $sondages = $this->model->sondages();

        echo json_encode($sondages);
    }

    public function sendData()
    {
        if (isset($_POST['item'])) {
            echo json_encode($_POST['item']);
            foreach ($_POST['item'] as $reponse) {
                $this->model->setReview($reponse);
            };
        } else {
            echo json_encode(["error"]);
        }
    }
}
