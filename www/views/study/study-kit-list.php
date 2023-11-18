<?php
// вид выводит список всех сформированных пользователем коллекций

/** @var $model app\models\Study\StudyKit */

/** @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

// заголовки для HTML страницы
$this->title = "Списки слов для интенсивного изучения.";
$this->params['keywords'] = "английский язык, обучение, бесплатно, система быстрого изучения слов, список английских слов, коллекция слов, ускоренная программа изучения слов";
$this->params['description'] = "Система быстрого набора словарного запаса. Программа быстрого заучивания английских слов." ;

?>



<h3>Ваши коллекции для изучения</h3>

<?php
if (!is_null($model->errorText)) {
    echo "<div class=\"col-lg-8\" style='color: red'>{$model->errorText}</div>";
}

echo "<h5 style='margin: 30px 20px'><a href='/new-kit'>Добавить новую коллекцию</a>
 &nbsp; &nbsp; <a href='/setting-playback' target='_blank'>Настройки воспроизведения</a></h5>";

$form = ActiveForm::begin([
    'id' => 'kit-to-study-form',
    'action' => '/study',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => "<b>{label}</b>\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-8\" style='color: red'>{error}</div>",
        'labelOptions' => ['class' => 'col-lg-5 col-form-label'],
    ]]);

echo "<div class='col-lg-offset-1 col-lg-11'>" .
    Html::submitButton('Слушать выбранные коллекции', ['class' => 'btn btn-primary', 'id' => 'btnSbm']) . "
    </div><br />";

$studyKitList = $model->getStudyKitList();
$i = 0;
foreach ($studyKitList as $studyKit) {
    $kitName = Html::encode($studyKit['study_kit_name']);

    // ссылка на удаление коллекции
    $delete = Html::a("Удалить",
        ["/delete-kit"], [
            'data-method' => 'POST',
            'data-params' => [
                'KitToStudyForm[kitId]' => $studyKit['study_kit_id'],
            ],
        ]);
    $study = "<a href='/study?kitId={$studyKit['study_kit_id']}' target='_blank'><b>Изучить</b></a>";

    echo "<input id='ch$i' type='checkbox' name='kitId[]' value='{$studyKit['study_kit_id']}' onchange='submitButtonVisible(this)'";
    echo "<label for='ch$i' style='margin: 10px 0; border: 2px solid black;'>
         &nbsp; <b>$kitName</b>
        &nbsp; &nbsp;  $study
            <p style='font-size: 10pt; margin:  0 0 0 50px; text-align: left'><a href='/kit-fill?kitId={$studyKit['study_kit_id']}' target='_blank'>Редактировать</a></p>
        <p style='font-size: 10pt; margin: 0; padding: 0 0 10px; text-align: right; border-bottom: 1px solid lightgray'>$delete</p></label>";

    $i++;
}
ActiveForm::end();
?>
<SCRIPT defer>
    function submitButtonVisible(){
        let cksM = document.getElementsByName("kitId[]");

        for (let i=cksM.length-1; i>=0; i--)
        {
            if (cksM[i].checked)
            {
                document.getElementById("btnSbm").style.visibility = '';
                return;
            }
        }

        document.getElementById("btnSbm").style.visibility = 'hidden';
    }

    window.onload = function() {
        submitButtonVisible();
    };
</SCRIPT>