<?php

namespace app\controllers;

use app\models\course\CourseList as CL;
use app\models\SkulteNew\ListLessons as LL;
use Exception;
use Yii;
use yii\web\Controller;

/**
 * Отвечает за отображение курсов английского языка
 */
class CourseController extends Controller
{
    /**
     * @throws Exception
     */
    public function actionIndex()
    {
        try {
            $courseName = $this->getVar('courseName');
            if ($courseName === false) throw new Exception("Не задана переменная courseName", 0);

            $lesson = $this->getVar('lesson');
            if ($lesson === false) {
                // вывод списка уроков
                return $this->render("index",
                    [
                        "courseName" => CL::$courseList[$courseName]['name'],
                        "courseUrl" => $courseName,
                    ]);
            }

            // выводится урок
            return $this->render("lesson",
                [
                    "courseName" => CL::$courseList[$courseName]['name'],
                    "courseUrl" => $courseName,
                    "lesson" => $lesson
                ]);
        } catch (Exception $e) {
            return "";
        }
    }

    /**
     * Выводит главную страницу с курсом английского языка Скультэ
     *
     */
    public function actionSkulte()
    {
        return $this->render("skulte", []);
    }

    /**
     * Выводит главную страницу со списком лингафонных курсов
     *
     */
    public function actionLingofon()
    {
        return $this->render("lingofon", []);
    }

    /**
     * @param string $varName
     * @return false|void
     * @throws Exception
     */
    private function getVar(string $varName)
    {
        if (!isset(Yii::$app->request->get()[$varName])) {
            return false;
        }

        $val = Yii::$app->request->get()[$varName];

        $funIsNotValid = "isNotValid_" . $varName;

        if ($this->$funIsNotValid($val)) {
            throw new Exception("Не допустимое значение у переменной $varName", 0);
        }

        return $val;
    }

    private function isNotValid_courseName(&$val): bool
    {
        $val = mb_strtolower($val);

        if (isset(CL::$courseList[$val])) {
            return false;
        };

        return true;
    }

    private function isNotValid_lesson(&$val): bool
    {
        $val = mb_strtolower($val);

        // на валидность номер урока проверяется во вью
        // т.к. там проще подключать модель курса
        return false;
    }


}
