<?php

namespace app\controllers;

use app\models\lingofon\LessonContent;
use yii\web\Controller;

/**
 * Отвечает за управление данными пользователей
 */
class LingofonController extends Controller
{
    /**
     * Выводит страницу помощи по использованию проигрывателя разговорной практики
     *
     * @return string
     */
    public function actionHelpSpeakingPlayer()
    {
        return $this->render("help_speaking_player");
    }

    /**
     * Выводит страницу помощи по использованию проигрывателя лингафонного курса
     *
     * @return string
     */
    public function actionHelpLingofonLessonPlayer()
    {
        $model = new LessonContent();

        return $this->render("help_lingofon_lesson_player", ["model" => $model, ]);
    }

    /**
     * Формирует страницу для воспроизведения урока $lessonId
     *
     * @return string|\yii\web\Response
     */
    public function actionLingofonContentPlay(){
        $lessonId = 0;
        $getVar = \Yii::$app->request->get();

        if (!isset($getVar['lingofon_lesson_id'])) {
            return $this->redirect("/lingofon", 302);
        }

        // определяет это урок прослушивания или говорения
        $speaking = false;
        if (isset($getVar['speaking'])) {
            $speaking = true;
        }

        $lessonsId = $getVar['lingofon_lesson_id'];

        if (!is_array($lessonsId) || count($lessonsId) === 0) {
            return $this->redirect("/lingofon", 302);
        }

        $model = new LessonContent();
        $model->lessonsId = $lessonsId;

        return $this->render("lingofon_content", ["model" => $model, "speaking" => $speaking,]);
    }

    /**
     * Формирует страницу описания метода Умина / Замяткина
     *
     * @return string|\yii\web\Response
     */
    public function actionMetodUminZamyatkin(){
        return $this->render("metod_umin_zamyatkin");
    }
}