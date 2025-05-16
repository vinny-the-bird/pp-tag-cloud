<?php

include '../bootstrap.php';

$loc = filter_input(INPUT_GET, "loc");
$action = filter_input(INPUT_POST, "action");
var_dump($loc, $action);

$controller = null;

switch ($loc) {
    case "tag":
        // include(BASE_PATH."controllers/TagController.php");
        include BASE_PATH."controllers/TagController.php";
        $controller = new TagController($action);
        // $controller->index();
        // $controller->show();

        break;
    case "note":
        include "../app/controllers/NoteController.php";
        $controller = new NoteController($action);
        break;
}

$controller->run();
// extract($data);
// include "template/header.php";
// include ($controller->$view);
// include "template/footer.php";

