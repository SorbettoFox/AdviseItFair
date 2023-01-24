<?php

class MainController {
    function __construct($f3) {

        //generate a 6 character token
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token = '';
        for ($i = 0; $i < 6; $i++) {
            $token .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        $f3->set('token', $token);
        $f3->route('GET /', 'MainController->home');
    }
    function home(){
        echo View::instance()->render('views/index.html');
    }
}
