<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<title><?= $this->title = "Test" ?></title>

<!-- <h1><?php debug($model) ?></h1> -->


<?php if (Yii::$app->session->hasFlash("success")): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo Yii::$app->session->getFlash("success") ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

<?php endif; ?>


<?php if (Yii::$app->session->hasFlash("error")): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo Yii::$app->session->getFlash("error") ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

<?php endif; ?>
<?php
$form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
<?= $form->field($model, "name") ?>
<?= $form->field($model, "email") ?>
<?= $form->field($model, "text")->textarea(["rows" => 6]) ?>
<?= Html::submitButton("Submit", ["class" => "btn btn-success"]) ?>

<?php ActiveForm::end() ?>