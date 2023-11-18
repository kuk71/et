<?php
// форма для формирования коллекции слов для заучивания

use app\models\db\StudyKitList;
use yii\bootstrap\Html;

/** @var $model app\models\EditStudy\WordSelectToStudyForm */
/** @var $this yii\web\View */

// получает название и описание урока
$kit = StudyKitList::getStudyKitName($model->kitId);

$kitName = Html::encode($kit[0]['study_kit_name']);
$kitDescription = Html::encode($kit[0]['study_kit_description']);

$this->title = "Ускоренная программа изучения слов. " . $kitName . " Коллекция слов для изучения. Список слов для изучения.";
$this->params['keywords'] = "английский язык, обучение, бесплатно, система быстрого изучения слов, список английских слов, коллекция слов, ускоренная программа изучения слов";
$this->params['description'] = "Система интенсивного увеличения словарного запаса английского языка. " . $kitDescription;

echo "<h3>Выбор слов для изучения</h3>";

if (!is_null($model->errorText)) {
    // вывод ошибки
    echo "<div class=\"col-lg-8\" style='color: red'>{$model->errorText}</div>";
}

// форма для выбора слов
echo $this->render("_form-word-select", ['model' => $model]);

// список уже выбранных слов
echo $this->render("_form-word_study_list", ['model' => $model]);