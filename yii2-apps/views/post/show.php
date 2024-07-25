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
 
$servername = "%";
$username = "yii2basic";
$password = "yii2basic";
$dbname = "yii2basic";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Устанавливаем режим ошибки PDO в режим исключений
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection faile: " . $e->getMessage();
}

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