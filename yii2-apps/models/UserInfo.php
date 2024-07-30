<?php
namespace app\models;

use yii\db\ActiveRecord;

class UserInfo extends ActiveRecord
{
    public static function tableName()
    {
        return "user_info";
    }
    // public function rules()
    // {
    //     return [
    //         [["username", "password", "email"], "required"],
    //         [["username", "password", "email"], "string", "max" => 255],
    //         [["username"], "string", "max" => 10],
    //         ["email", "email"],
    //         [["password"], "string", "max" => 255, , "min" => 8],
    //         ['username', 'unique'],
    //         ['email', 'unoque']
    //     ];
    // }
}