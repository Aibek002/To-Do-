<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->title = "Show" ?></title>
</head>

<body>
    <?php
    use yii\helpers\Html;
    use yii\web\View;

    echo "<h1>Action Shows</h1>";
    echo '<button class="btn btn-success" id="btn">Click me...</button>';
    // $this->registerJsFile('@web/js/scripts.js?v=' . time(), ['depends' => '\yii\web\YiiAsset']);
    

    $js = <<<JS
$('#btn').on('click',function() {
    $.ajax({
        url: 'index.php?r=post/test',
        data: {test: '123'},
        type: 'POST',
        success: function(res){
            console.log(res);
        },
        error: function(){
            alert('Error!');
        }
    });
});
JS;
    $this->registerJs($js);
    ?>
</body>

</html>