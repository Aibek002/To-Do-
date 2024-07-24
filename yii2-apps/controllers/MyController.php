<?php

namespace app\controllers;


class MyController extends AppController {


public function actionIndex(){

    return $this->render('index');
    
}

}