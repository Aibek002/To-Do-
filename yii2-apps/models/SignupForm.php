<?php
namespace app\models;

use yii\base\Model;


class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            ['username', 'string', 'max' => 11, 'min' => 2],
            ['email', 'email'],
            ['password', 'string', 'min' => 8, 'max' => 128],
        ];
    }
}