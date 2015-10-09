<?php

namespace AppController;
use \App;

class Controller
{
    /* -----  On récupère les view --*/

    protected $viewPath;
    protected $template = 'default';
    protected $templateVide= 'vide';

    //protected $model_name;

    public function __construct()
    {
        $this->viewPath = ROOT . '/Views/';
    }


    public function notFound()
    {
        $this->render('notFound');

    }

     public function loadModel($model_name){
     $this->$model_name= App::getInstance()->getTable($model_name);
    }


    protected function render($view, $variables = [])
    {
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . '/' . $this->template . '.php');
    }




}