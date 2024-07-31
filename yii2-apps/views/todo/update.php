<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Обновление задачи';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="todo-update">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($update, 'title')->textInput(); ?>
    <?= $form->field($update, 'description')->textarea(); ?>
    <?= $form->field($update, 'status')->checkbox(); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
