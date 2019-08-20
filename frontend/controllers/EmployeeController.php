<?php


namespace frontend\controllers;

use Yii;
use frontend\models\Employee;
use yii\web\Controller;

class EmployeeController extends Controller
{
    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_REGISTER;

        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {
                Yii::$app->session->setFlash("success", "Вы успешно зарегестрировались");
            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_UPDATE;
        $model->attributes = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            if ($model->validate()) {
                Yii::$app->session->setFlash("success", "Данные обновлены");
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
}