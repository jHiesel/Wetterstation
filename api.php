<?php


require_once('controllers/RESTController.php');

// entry point for the application
// e.g. http://localhost/php42/index.php?r=station/view&id=25
// select route: station/view&id=25 -> controller=station, action=view, id=25
$route = isset($_GET['r']) ? explode('/', trim($_GET['r'], '/')) : ['home'];
$controller = sizeof($route) > 0 ? $route[0] : '';

if ($controller == 'station') {
    require_once('controllers/StationRESTController.php');
    (new StationRESTController())->handleRequest($route);
 } else if ($controller == 'measurement') {
    require_once('controllers/MeasurementRESTController.php');
    (new MeasurementRESTController())->handleRequest($route);
 } else {
    Controller::showError("Page not found", "Page for operation " . $controller . " was not found!");
 }



