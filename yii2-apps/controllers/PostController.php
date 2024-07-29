<?php

namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\TestForm;
class PostController extends AppController{

public  $layout = 'basic';


public function actionTest(){
    $name=['name1','name2','name2','name2','name1'];
    if(Yii::$app->request->isAjax){
        debug(Yii::$app->request->post());
        return"test";
    }
    $model = new TestForm();
    if ($model->load(Yii::$app->request->post())) {
        if($model->validate()){
            Yii::$app->session->setFlash("success","Данные приняты!");
            return $this->refresh();
        }else{
            Yii::$app->session->setFlash("error","Ошибка!");
        }

    }

    return $this->render('test' ,compact('model'));
 
}
public function actionShow(){
    $cats=Category::find()->all();
    return $this->render('show' ,compact('cats') );
 
}
}