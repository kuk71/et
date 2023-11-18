<?php

namespace app\controllers;

use app\models\db\WordList;
use app\models\Study\StudyKit;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Отвечает за формирование списка слов для изучения
 */
class StudyController extends Controller
{
    // управление доступом к действиям (action)
    public function behaviors()
    {
        $actionList = [
            'study-kit',
            ];

        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => $actionList,
                'denyCallback' => function ($rule, $action) {
                    \Yii::$app->response->redirect('/login', 302)->send();;
                },
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => $actionList,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Выводит список слов из публичной коллекции
     *
     * @return void
     */
    public function actionListPublicWords()
    {
        $kitId = (int)$this->getKitId()[0];

        return $this->render("public-study-word-list", ["kitId" => $kitId]);
    }

    /**
     * Выводит страницу с описанием проигрывателя слов
     *
     * @return void
     */
    public function actionHelpWordPlayer()
    {
        return $this->render("help_word_player");
    }

    /**
     * Выводит страницу со ссылкой на личный кабинет и список публичных коллекций
     *
     * @return string
     */
    public function actionIndex()
    {
        $modelStudyKit = new StudyKit();
        $modelStudyKit->isPublicKits = true;

        // выводится список доступных публичных коллекций
        return $this->render("public-study-kit-list", ["model" => $modelStudyKit]);
    }

    /**
     * Выводит список для изучения коллекций слов
     *
     * @return string
     */
    public function actionDescriptionMethod()
    {
        // выводится список доступных коллекций
        return $this->render("description_method", []);
    }

    /**
     * Выводит список, сформированных для обучения пользователем, коллекций слов
     *
     * @return string
     */
    public function actionStudyKit()
    {
        $modelStudyKit = new StudyKit();

        // выводится список доступных коллекций
        return $this->render("study-kit-list", ["model" => $modelStudyKit]);
    }

    /**
     * Формирует страницу для проигрывания коллекции слов
     * непосредственно для заучивания
     */
    public function actionStudy()
    {
        $modelStudyKit = new StudyKit();

        $modelStudyKit->kitId = $this->getKitId();

        // выводится список доступных коллекций
        return $this->render("study", ["model" => $modelStudyKit]);
    }

     /**
      * Возвращает переданный через GET id формируемой коллекции слов для изусения
      * если id коллекции не передан, происходит редирект на главную страницу
     *
     * @return int|void
     */
    private function getKitId()
    {
        $var = \Yii::$app->request->post();

        if (isset($var['kitId']) && is_array($var['kitId'])) {
            foreach ($var['kitId'] AS $id) {
                $kitId[] = (int)$id;
            }

            return $kitId;
        }

        // данные переданы со страницы с публичными коллекциями
        $var = \Yii::$app->request->get();

        if (isset($var['kitId'])) {
            $kitId[] = (int)$var['kitId'];

            return $kitId;
        }

        // обязательная переменная не передана
        \Yii::$app->response->redirect('/', 302)->send();
    }
}