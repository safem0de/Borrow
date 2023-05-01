<?php
/*
     * Url / controller / method / params
     * 
     */

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        // print_r($this->getUrl());
        // print(APPROOT);

        $url = $this->getUrl();
        $f_controller = implode("", array(APPROOT , '/controllers/' , ucwords($url[0]) , '.php'));

        // // Controller finder
        if (file_exists($f_controller)) 
        {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);

            // print('<br>yes '.$this->currentController);

            require_once $f_controller;
            $this->currentController = new $this->currentController;

            if(isset($url[1]))
            {
                // print('<br>yeah');
                if(method_exists($this->currentController, $url[1]))
                {
                    // print('<br>Ah haa<br>');
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }
        }
        else
        {
            die('Not Found Page');
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod],$this->params);

    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
