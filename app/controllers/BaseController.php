<?php 

abstract class BaseController {
    private string $view;
    abstract protected string $action;

    abstract public function getView();
    abstract protected function setView();

    abstract public function run();

    abstract protected function index();
    abstract protected function show($id);

}

?>