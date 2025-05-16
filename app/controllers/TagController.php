<?php

exit('fin');

class TagController extends BaseController
{

    public function __construct($toto)
    {
        echo "Je suis dans le controlleur Tag action : " . $toto;

        switch ($toto) {
            case "index":
                $this->index();
                break;
            case "show":
                $this->show($toto);
                break;
            default:
                echo "404";
                break;
        }
    }
    public function index()
    {
        echo "Liste de tous les tags";
    }

    public function show($id)
    {
        echo "Untag";
    }

    //     public function getView()
    // {
    //     echo "get a view";
    // }

    // public function setView()
    // {
    //     echo "set view";
    // }

    // public function run()
    // {
    //     echo "run";
    // }

}
