<?php

namespace apps\Models;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;


class TodoInfo extends ActiveRecord{
    public static function tableName() { 
        return "to_do";
     }
     public function rules()
     {
         return [
             [['title', 'description'], 'required'],
             [['title'], 'string', 'max' => 255],
             [['description'], 'string'],
             [['status'], 'boolean'],
             [['created_at', 'updated_at'], 'integer'],
         ];
     }

    public function behaviors() {
        return [
            'timestamp'=>[
                'class'=> TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at','updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                    ],
                    'value' => time(),
                ]
            ];
        }

}
