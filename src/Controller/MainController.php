<?php
namespace App\Controller;

use App\Controller\AppController;

class MainController extends AppController
{
    public function index() 
    {
        $this->set('message', 'Welcome to the AI CMS! This is your main page.');
    }

    public function blank() 
    {
        $this->set('message', 'This is a blank page. You can start building here!');
    }
}
