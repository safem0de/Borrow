<?php
    class Borrows extends Controller
    {
        public function __construct()
        {
            // echo 'Borrows Loaded';
        }

        public function requests()
        {
            $this->view('borrows/request');
        }
    }