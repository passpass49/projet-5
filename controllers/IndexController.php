<?php
namespace Controllers;
class IndexController extends Controller{
    public function home(){
        $this->render('home');
    }
    public function contact(){;
        $this->render('contact');
    }
}