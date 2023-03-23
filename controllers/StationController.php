<?php

require_once('Controller.php');
require_once('models/Measurement.php');
require_once('models/Station.php');

class StationController extends Controller
{
    /**
     * @param $route array, e.g. [station, view]
     */
    public function handleRequest($route)
    {
        $operation = sizeof($route) > 1 ? $route[1] : 'index';
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($operation == 'view') {
            $this->actionView($id);
        } elseif ($operation == 'index') {
            $this->actionindex();
        }elseif ($operation == 'update') {
            $this->actionUpdate($id);
        } elseif ($operation == 'delete') {
            $this->actionDelete($id);
        }elseif ($operation == 'create') {
            $this->actionCreate($id);
        } else {
            Controller::showError("Page not found", "Page for operation " . $operation . " was not found!");
        }
    }

    public function actionIndex()
    {

    }

    public function actionView($id)
    {

    }

    public function actionCreate()
    {

    }

    public function actionUpdate($id)
    {

    }

    public function actionDelete($id)
    {

    }

}
