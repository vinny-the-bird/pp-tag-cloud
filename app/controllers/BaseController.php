<?php 

abstract class BaseController {
    private string $view;
    protected string $action;
    
    protected function getView() {
        return $this->view;
    }

    protected function setView($view) {
        $this->view = $view;
    }

    abstract protected function index();
    abstract protected function show($id);

    public function run(): void {
        echo "running";
    }
}

?>