<?php
echo "<h1>Action Show</h1>";
$this->registerJsFile(
    '@web/js/scripts.js',
    ['depends' =>  '\yii\web\YiiAsset' ]
);