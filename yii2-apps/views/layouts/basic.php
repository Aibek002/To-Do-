<?php
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);


?>
<?php $this->beginPage() ?>



<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php
    $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <header class="d-flex justify-content-left py-3">

                <ul class="nav nav-pills">
                    <li role="presentation" class='nav-item'>
                        <?= Html::a('Home', '/index.php/', ['class' => 'nav-link active']) ?></li>
                    <li role="presentation" class='nav-item'>
                        <?= Html::a('Articles', ['/post/test/'], ['class' => 'nav-link']) ?></li>
                    <li role="presentation" class='nav-item'>
                        <?= Html::a('Article', ['/post/show/'], ['class' => 'nav-link']) ?></li>
                </ul>
            </header>
            <?= $content ?>

        </div>
    </div>
    <?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>