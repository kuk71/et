<?php
// вид выводит список всех слов из публичной коллекции

/** @var $kitId - id коллекции переданный из контроллера */

/** @var $this yii\web\View */

use app\models\db\ListToStudy;
use app\models\db\StudyKitList;
use yii\helpers\Html;

$kit = StudyKitList::getStudyKitName($kitId);

if (count($kit) === 0) {
    return "";
}

$kitName = Html::encode($kit[0]['study_kit_name']);
$kitDescription = Html::encode($kit[0]['study_kit_description']);

$this->title = "Ускоренная программа изучения слов. " . $kitName . " Коллекция слов для изучения. Список слов для изучения к уроку.";
$this->params['keywords'] = "английский язык, обучение, бесплатно, система быстрого изучения слов, список английских слов к уроку, коллекция слов, ускоренная программа изучения слов";
$this->params['description'] = "Система интенсивного увеличения словарного запаса английского языка. " . $kitDescription;

// получает список словарных статей в виде каталога [dic_entry_id][НаписаниеИзучаемого слова][] = Написание перевода
$kitWordList = ListToStudy::getDicEntryContent($kitId, -1);

// получает массив

if (count($kitWordList) === 0) {
    return "";
}
?>

<h3>Учим английские слова.<br>Коллекция: "<?= $kitName ?>"</h3>

<!--<p><a href="/learning_english_words">Вернуться к списку коллекций английских слов&nbsp;>>></a></p>-->
<br>
<p style="font-size: 20px"><?= $kitDescription ?></p>
<br>
<span style="border: 1px solid black; border-radius: 5px; background-color: lightskyblue; padding: 5px;"><a
            href="/study?kitId=<?= $kitId ?>" style="color: black; padding: 2px 5px" target="_blank">Учить выбранные слова&nbsp;>>></a></span>

<br><br>

<p style="">О том как учить слова можно <a href="/learning_english_words/description" target="_blank">прочитать тут&nbsp;>>></a></p>

<p>Если в списке слишком много слов для одного раза или есть слова, которые Вы уже знаете, Вы можете снять галочки рядом
    со славами. И эти слова не будут проигрываться.</p>

<p>Всего слов в коллекции: <?=count($kitWordList)?></p>

<p><input id='checkAll' type='checkbox' onchange='changeAll()' checked> <label style='' for='checkAll'> Отметить всё</label></p>


<?php
$i = 0;
foreach ($kitWordList as $entryId => $entry) {
    $i++;
    $wordIdForAutoLoad[] = $entry[0];
    $entryIdList[] = $entryId;

    $wordId = $entry[0];
    $word = $entry[1];
    // из вложенного массива формируется список переводов (словарных пар) $word
    $translate = implode(", ", $entry[2]);

    echo "
<div style='padding: 0 0 3px; border: 0px solid black; display: flex; flex-wrap: nowrap;'>
    <div style='width: 25px; text-align: right; padding-right: 5px'>$i</div>
    <div style='width: 25px; text-align: right; padding-right: 5px; cursor: pointer;' onclick='playerWorkPlay({$wordId})'> ▶ </div>
    <div style='padding: 2px 10px 0 0'><input type='checkbox' id='$entryId' onchange='saveLearnedEntryId(this)' checked></div>
    <div><label style='display: block; margin: 0;' for='$entryId'><b>" . Html::encode($word) . "</b> - " . Html::encode($translate) . "</label></div>
</div>";
}
?>

<br>

<span style="border: 1px solid black; border-radius: 5px; background-color: lightskyblue; padding: 5px;"><a
            href="/study?kitId=<?= $kitId ?>" style="color: black; padding: 2px 5px" target="_blank">Учить выбранные слова&nbsp;>>></a></span>
<br><br><br>

<?php
// скрипты автоподгрузки слов и управления локальным хранилищем
echo $this->render("../edit-study/_JS", ['kitForStudy' => $kitWordList]);
