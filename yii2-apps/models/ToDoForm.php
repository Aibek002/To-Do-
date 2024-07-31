<?php

namespace app\models;

use yii\base\Model;


class ToDoForm extends Model
{

    public $title;
    public $description;
    public $status;
    public $created_at;
    public $updated_at;

    public function rules()
    {
        return [
            [["title", "description"], "required"],
            [["created_at", "updated_at"], "integer"],
            [["title"], "string", "max" => 255],
            [["status"], "string", "max" => 1],
        ];
    }
    

}