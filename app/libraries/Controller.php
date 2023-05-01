<?php
    /*
     * Load models and views
     */

     class Controller
     {
        public function model($model)
        {
            $m = implode("", array(APPROOT,'/models/',$model,'.php'));
            if(file_exists($m))
            {
                require_once $m;
                return new $model();
            }
            else
            {
                die('Model does not exist');
            }
        }

        public function view($view, $data = [])
        {
            $v = implode("",array(APPROOT,'/views/',$view,'.php'));
            if(file_exists($v))
            {
                require_once $v;
            }
            else
            {
                die('View does not exist');
            }
        }
     }