<?php
// выводит коллекцию слов для заучивания с переводами (словарными парами)

use app\models\db\ListToStudy;
use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $model \app\models\EditStudy\WordSelectToStudyForm */

$userId = \Yii::$app->user->id;

// получает список словарных статей в виде каталога [dic_entry_id][0] = wordId переводимого слова
//                                                                [1][НаписаниеИзучаемого слова][] = Написание перевода
$kitForStudy = ListToStudy::getDicEntryContent($model->kitId, $userId);

$title = "Ваши слова";
$kitCount = "Всего слов: " . count($kitForStudy);

$linkStudy = "<a href='/study?kitId={$model->kitId}' target='_blank'><b>Учить&nbsp;отмеченные&nbsp;слова&nbsp;>>></b></a>";

$linkSettings = "<a href='/setting-playback' target='_blank'>Настройки&nbsp;воспроизведения</a>";

if (count($kitForStudy) == 0) {
    $title = "Вы пока не добавили ни одного слова";
    $kitCount = "";
    $linkStudy = "";
}

echo "<div style='margin-left: 20px'>
    <h4>$title</h4>
    <p>$kitCount</p>
    <p>$linkStudy &nbsp; &nbsp; &nbsp; &nbsp; $linkSettings</p>
    <p><input id='checkAll' type='checkbox' onchange='changeAll()' checked> <label style='' for='checkAll'> Отметить всё</label></p>
    ";


$wordIdForAutoLoad = [];
$entryIdList = [];
foreach ($kitForStudy AS $entryId => $entry) {
    $wordIdForAutoLoad[] = $entry[0];
    $wordId = $entry[0];
    $word = $entry[1];
    $entryIdList[] = $entryId;

    // из вложенного массива формируется список переводов (словарных пар) $word
    $translate = implode(", ", $entry[2]);

    echo "
    <div style='margin-left: 20px'>
        <span style='width: 25px; text-align: right; padding-right: 5px; cursor: pointer;' onclick='playerWorkPlay({$wordId})'> ▶ </span>
        <input id='$entryId' type='checkbox' onchange='saveLearnedEntryId(this)' checked> &nbsp; <b>" . Html::encode($word) . "</b>
        <span style='margin-left: 20px; font-size: 10pt; color: lightgray'>";

    echo Html::a("удалить из списка",
        ["/delete-word"], [
            'data-method' => 'POST',
            'data-params' => [
                'WordDeleteFromKit[kitId]' => $model->kitId,
                'WordDeleteFromKit[dicEntryId]' => $entryId
            ],
        ]);

    echo "
        </span><br />
        <div style='margin: 0 40px 10px; font-size: 11pt'>" . Html::encode($translate) . "</div>
    </div>";
}

echo "</div>";

// скрипты автоподгрузки слов и управления локальным хранилищем
echo $this->render("_JS", ['kitForStudy' => $kitForStudy]);

