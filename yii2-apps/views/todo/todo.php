<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "To Do Form";
$this->params["breadcrumbs"][] = $this->title;
?>
<div class="site-todo">
<h1><?= Html::encode($this->title) ?></h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,"title")->textInput(); ?>
<?= $form->field($model,"description")->textarea(); ?>

<div class="form-group">
    <?= Html::submitButton("Отправить", ["class"=> "btn-btn-primary"]) ?>
</div>

<?php ActiveForm::end(); ?>
</div>
</body>
</html>