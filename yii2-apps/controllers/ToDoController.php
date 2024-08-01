<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ToDoForm;
use app\models\TodoInfo;
use yii\web\NotFoundHttpException;

class TodoController extends Controller
{
    public function actionTodo()
    {
        $toDoForm = new ToDoForm();
        if ($toDoForm->load(Yii::$app->request->post()) && $toDoForm->validate()) {

            $todo_table = new TodoInfo();

            $todo_table->title = $toDoForm->title;
            $todo_table->description = $toDoForm->description;
            date_default_timezone_set('UTC');// Установите нужный часовой пояс

            $todo_table->created_at = time();
            if ($todo_table->save()) {
                Yii::$app->getSession()->setFlash("success", "Successfully");
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash("error", "Error");
            }
        }

        return $this->render("todo", ["model" => $toDoForm]);


    }
    public function actionTodolist()
    {
        $todolist = TodoInfo::find()->All();
        return $this->render("todolist", compact("todolist"));
        // return "hello";

    }
    public function actionUpdate($id)
    {
        $update = TodoInfo::findOne($id);
        if (!$update) {
            throw new NotFoundHttpException("Error: Not find value");
        }
        if ($update->load(Yii::$app->request->post()) && $update->validate() && $update->save()) {
            Yii::$app->getSession()->setFlash("success", "Success");
            return $this->redirect("/index.php?r=todo/todolist");
        }
        return $this->render("update", compact("update"));
    }
    public function actionDelete($id)
    {
        $delete = TodoInfo::findOne($id);
        if (!$delete) {
            throw new NotFoundHttpException("Error: Not found");
        }
        if ($delete->delete()) {
            Yii::$app->session->setFlash('success', "Successfylly deleted");
            return $this->redirect("/index.php?r=todo/todolist");

        } else {
            Yii::$app->session->setFlash('error', 'Error deleting task');
            return $this->redirect("/index.php?r=todo/todolist");

        }
    }

    public function actionUpdateStatus()
{
    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    $id = Yii::$app->request->post('id');
    $todo = TodoInfo::findOne($id);

    if ($todo) {
        $status = Yii::$app->request->post('status', 'Pending');
        $todo->status = $status;
        if ($todo->save()) {
            return ['success' => true];
        } else {
            return ['success' => false, 'errors' => $todo->errors];
        }
    }

    return ['success' => false, 'message' => 'Task not found'];
}

}