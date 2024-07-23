<?php

namespace app\controllers\admin;


use app\controllers\AppController;

class UserController extends AppController {

    public function actionIndex() {

        $helloWorld="Hello , Admin";
        return $this->render('index' , ['helloWorld' => $helloWorld]);
    }
}