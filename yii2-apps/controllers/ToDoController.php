<?php

    namespace apps\Controllers;
    use Yii;
    use yii\web\Controller;
    use app\models\ToDoForm;    

    class ToDoController extends Controller
    {
        public function actionCreate(){
            $toDoForm = new ToDoForm();
        }