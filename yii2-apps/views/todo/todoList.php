<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "To Do List";
$this->params["breadcrumbs"][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="site-todo">
        <h1><?= Html::encode($this->title) ?></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="table-dark">#</th>
                    <th class="table-dark">title</th>
                    <th class="table-dark">description</th>
                    <th class="table-dark">status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todolist as $todo): ?>
                    <tr>
                        <td class="table-dark"> <?= Html::encode($todo->id) ?></td>
                        <td class="table-dark"> <?= Html::encode($todo->title) ?></td>
                        <td class="table-dark"> <?= Html::encode($todo->description) ?></td>
                        <td class="table-dark">
                            <div class="form-check">
                                <input class="form-check-input status-checkbox" type="checkbox"
                                    value="<?= Html::encode($todo->id) ?>"
                                    id="flexCheckIndeterminate_<?= Html::encode($todo->id) ?>"
                                    <?= $todo->status === 'Completed' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexCheckIndeterminate_<?= Html::encode($todo->id) ?>">
                                    <!-- <?= $todo->status ? '1' : '0' ?> -->
                                </label>

                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('.status-checkbox').on('change', function () {
                var id = $(this).val(); // Получаем ID задачи
                var status = $(this).is(':checked') ? 'Complyted' : "Pending"; // Определяем новый статус задачи

                $.ajax({
                    url: '<?= Url::to(['todo/update-status']) ?>',
                    type: 'POST',
                    data: {
                        id: id, // Передаем ID задачи
                        status: status,
                        _csrf: '<?= Yii::$app->request->csrfToken ?>' // Передача CSRF токена
                    },
                    success: function (response) {
                        if (response.success) {
                            alert('Status updated successfully.');
                        } else {
                            alert('Failed to update status: ' + (response.message || 'Unknown error.'));
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('An error occurred while updating the status: ' + xhr.responseText);
                    }
                });
            });
        });

    </script>
</body>

</html>