<?php
namespace Blog\controllers;
class AuthController extends Controller{
    public function login(){
        $this->render('auth/login');
    }
    public function register(){
        $this->render('auth/register');
    }
}
