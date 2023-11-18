<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Отвечает за управление данными пользователей
 */
class MainController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index", []);
    }

    public function actionError()
    {
        Yii::$app->response->statusCode = 200;
        $a = pathinfo(Yii::$app->request->pathInfo, PATHINFO_EXTENSION);

        if($a == "jpg" || $a == "gif") {
            return Yii::$app->response->redirect("/img/2.jpg", $statusCode = 302);
        }

        return $this->render('index', []);
    }
}