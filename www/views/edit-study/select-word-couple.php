<?php
// выбор вариантов перевода слова (словарных пар) для заучивания

use app\models\db\StudyKitList;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/** @var $model app\models\EditStudy\WordCoupleSelectForm */
/** @var $this yii\web\View */
/** @var $wordSpelling */

// получает название и описание урока
$kit = StudyKitList::getStudyKitName($model->kitId);

$kitName = Html::encode($kit[0]['study_kit_name']);
$kitDescription = Html::encode($kit[0]['study_kit_description']);

$this->title = "Ускоренная программа изучения слов. " . $kitName . " Выбор вариантов перевода к добавляемому в коллекцию слову.";
$this->params['keywords'] = "английский язык, обучение, бесплатно, система быстрого изучения слов, список английских слов, коллекция слов, ускоренная программа изучения слов";
$this->params['description'] = "Добавление нового слова к списку слов для изучения. Система интенсивного увеличения словарного запаса английского языка. " . $kitDescription;

echo "<h3>Выберите вариант перевода для <br />слова " . Html::encode($wordSpelling) . ":</h3>";
echo "<a href=''><<< назад к поиску слов</a>";

if (!is_null($model->errorText)) {
    echo "<div class=\"col-lg-8\" style='color: red'>{$model->errorText}</div>";
}

$form = ActiveForm::begin([
    'id' => 'word-translation-select-to-study-form',
    'options' => ['class' => 'form-horizontal'],
    'action' => '/select-word-translation',
    'fieldConfig' => [
        'template' => "<b>{label}</b>\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-8\" style='color: red'>{error}</div>",
        'labelOptions' => ['class' => 'col-lg-5 col-form-label'],
    ]]);




$wordTranslation = $model->getWordCoupleList();
$arrKey = array_column($wordTranslation, "word_couple_id");
$arrVal = array_column($wordTranslation, "word_spelling");

$wordTranslation = array_combine($arrKey, $arrVal);

// получить массив id переводов обрабатываемого слова с которыми ранее были сформированы этим пользователем пары
$wordCoupleListBeforeSelected = $model->getWordCoupleListBeforeSelected(\Yii::$app->user->id);

// отметить ранее выбранные слова в форме
$model->wordCouple = $wordCoupleListBeforeSelected;

echo $form->field($model, 'wordCouple')
    ->checkboxList($wordTranslation);

// скрытые поля
// id слова для которого ищется перевод
echo $form->field($model, 'wordForStudyId')->hiddenInput()->label(false);
// id коллекции слов для изучения который формируется
echo $form->field($model, 'kitId')->hiddenInput()->label(false);
?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Выбрать', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>


