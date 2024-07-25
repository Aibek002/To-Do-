<?php

namespace app\controllers;
use Yii;
use app\models\TestForm;
class PostController extends AppController{

public  $layout = 'basic';


public function actionTest(){
    $name=['name1','name2','name2','name2','name1'];
    if(Yii::$app->request->isAjax){
        debug($_POST);
        return"test";
    }
    $model = new TestForm();

    return $this->render('test' ,compact('model'));
 
}
public function actionShow(){
    $name=['name1','name2','name2','name2','name1'];
    
    return $this->render('show' );
 
}
}