<?php

namespace app\controllers\admin;


use yii\web\Controller;

class UserController extends Controller {

    public function actionIndex() {

        $helloWorld="Hello , Worlds";
        return $this->render('index' , ['helloWorld' => $helloWorld]);
    }
}