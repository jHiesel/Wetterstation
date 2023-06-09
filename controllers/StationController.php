<?php

require_once('Controller.php');
require_once('models/Measurement.php');
require_once('models/Station.php');

class StationController extends Controller
{
    /**
     * @param $route array, e.g. [station, view]
     * http://localhost/Wetterstation/index.php?r=xxxxxx [you but your request here + info]
     * don't forget you need to add the id via a separate variable i. e. '&id=1'
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
        $model = Station::getAll();
        $this->render("station/index", $model);
    }

    public function actionView($id)
    {
        $model = Station::get($id);
        $this->render("station/view", $model);
    }

    public function actionCreate()
    {
        $model = new Station();
        if(!empty($_POST)){
            $model->setName($this->getDataOrNull('name'));
            $model->setAltitude($this->getDataOrNull('altitude'));
            $model->setLocation($this->getDataOrNull('location'));

            if ($model->save()) {
                $this->redirect('station/view&id=' . $model->getId());
                return;
            }
        }
        $this->render("station/create", $model);
    }

    public function actionUpdate($id)
    {
        $model = Station::get($id);


        if(!empty($_POST)){

            $model->setName($this->getDataOrNull('name'));
            $model->setAltitude($this->getDataOrNull('altitude'));
            $model->setLocation($this->getDataOrNull('location'));

            if ($model->save()) {
                $this->redirect('station/view&id=' . $model->getId());
                return;
            }
        }
        $this->render("station/update", $model);


    }

    public function actionDelete($id)
    {
        if (!empty($_POST)) {
            $toDeleteMeasurement = Measurement::getAllByStation($id);

            foreach ($toDeleteMeasurement as $measurement){
                Measurement::delete($measurement->getId());
            }

            Station::delete($id);
            $this->redirect('station/index');
            return;
        }

        $this->render('station/delete', Station::get($id));

    }

}
