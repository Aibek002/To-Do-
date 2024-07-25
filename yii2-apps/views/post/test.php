<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

    
    <title><?= $this->title = "Test" ?></title>

    <!-- <h1><?php debug($model) ?></h1> -->

    <?php
    $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
    <?= $form->field($model, "name") ?>
    <?= $form->field($model, "email") ?>
    <?= $form->field($model, "text")->textarea(["rows" => 6]) ?>
    <?= Html::submitButton("Submit", ["class" => "btn btn-success"]) ?>

    <?php ActiveForm::end() ?>
