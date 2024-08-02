<?php

namespace app\controllers;

use app\models\SignupForm;
use app\models\ToDoForm;
use app\models\UserInfo;
use apps\Models\TodoInfo;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends AppController
{
    
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        echo'App';
        return $this->render('homepage');
    }

    


    // SignUp
    public function actionSignup()
    {
        $signup = new SignupForm();

        if ($signup->load(Yii::$app->request->post()) && $signup->validate()) {
            $table = new UserInfo();
            $table->username = $signup->username;
            $table->email = $signup->email;
            $table->password = $signup->password;

            if ($table->save()) {
                Yii::$app->session->setFlash('success', 'Successfully Registration');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', "Error Registration");
            }

        }
        return $this->render("signup", [
            "signup" => $signup
        ]);
      

    }
   
}
