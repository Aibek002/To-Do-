<?php
use yii\bootstrap5\Html;


foreach($todolist as $item) {
    echo date('Y-m-d H:i:s', $item->created_at) . "  " . $item->title . " " . Html::a('update', ['todo/update', 'id' => $item->id]) . " " . Html::a('delete', ['todo/delete', 'id' => $item->id]) . "</br>";
}
