<?php

namespace app\models;

use Yii;
use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;


    public function attributeLabels()
    {
        return [
            "name" => 'Имя',
            "email" => 'E-mail',
            "text" => 'Текст сообщения'

        ];

    }
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['name', 'string', 'length' => [2, 10]],
            ['text', 'trim'],
            ["name", "myRule"]


        ];
    }
    public function myRule($atr){
        if(!in_array($this->$atr,['Aibek','Aibeks'])){
            $this->addError($atr,'Wrong');
        }
    }
}