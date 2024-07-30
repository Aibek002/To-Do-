<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;


$this->title = "Registration";

$this->params["breadcrumbs"][] = $this->title;

?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        "id" => "signup-form",
        "options" => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => '{label}<div class=\"col-lg-3\">{input} <\div><div class=\"col-lg-8\">{error} <\div>',
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($signup, 'username')->textInput(['autofocus' => true]); ?>
    <?= $form->field($signup, 'email')->textInput(); ?>
    <?= $form->field($signup, 'password')->passwordInput(); ?>

    <div class="form-group">

        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Registration', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</body>
</html>