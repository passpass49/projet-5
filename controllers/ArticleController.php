<?php
namespace Blog\controllers;
class ArticleController extends Controller{
    public function index(){
        $this->render('blog\index');
    }
    public function post(){
        $this->render('blog\post');
    }
}
