<?php

namespace app\controllers;
use Yii;

class PostController extends AppController{

public  $layout = 'basic';


public function actionTest(){
    $name=['name1','name2','name2','name2','name1'];
    
    return $this->render('test' );
 
}
public function actionShow(){
    $name=['name1','name2','name2','name2','name1'];
    
    return $this->render('show' );
 
}
}