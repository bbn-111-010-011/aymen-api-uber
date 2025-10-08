<?php

require_once "../models/ChauffeurModel.php";

class ChauffeurController
{

    private $model;

    public function __construct()
    {
        $this->model = new ______();
    }

    public function getAllChauffeurs()
    {
        $chauffeurs = $this->model->_____();
        echo json_encode($chauffeurs);
    }
}
$chauffeurController = new ChauffeurController();
$chauffeurController->getAllChauffeurs();