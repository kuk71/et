<?php
// вид выводит страницу для озвучивания коллекции слов для изучения

use app\models\db\StudyKitList;
use yii\bootstrap\Html;

/** @var $model app\models\Study\StudyKit */
/** @var $this yii\web\View */

if (!is_null($model->errorText)) {
    echo "<div class=\"col-lg-8\" style='color: red'>{$model->errorText}</div>
        <a href='/'>Вернуться на главную страницу&nbsp;>>></a>";

    return;
}

// получает название и описание урока
$kit = StudyKitList::getStudyKitName($model->kitId);

$kitName = Html::encode($kit[0]['study_kit_name']);
$kitDescription = Html::encode($kit[0]['study_kit_description']);

$this->title = "Ускоренная программа изучения слов. " . $kitName . " Коллекция слов для изучения. Список слов для изучения.";
$this->params['keywords'] = "английский язык, обучение, бесплатно, система быстрого изучения слов, список английских 
    слов, коллекция слов, ускоренная программа изучения слов, программа ускоренного запоминания слов";
$this->params['description'] = "Система интенсивного увеличения словарного запаса английского языка. " . $kitDescription;

// получить слова из коллекции
$studyKitCnt = $model->getWordListFromStudyKit();

if (count($studyKitCnt) == 0) {
    echo "<h6 style='margin: 30px 20px'>В этой коллекции нет ни одного слова.<br>
            <a href='/kit-fill?kitId={$model->kitId[0]}'>Перейдите по ссылке если хотите наполнить ее словами.</a></h6>";

    return;
}

echo $this->render("_study_render", ['studyKitCnt' => $studyKitCnt]);
