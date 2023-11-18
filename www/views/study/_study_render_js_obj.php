<?php
// формируется JS объект со словарными статьями и массив с порядком воспроизведения
// для вывода на странице воспроизведения изучаемой коллекции

use yii\helpers\Html;

/** @var var $studyKitCnt - состав изучаемой коллекции //передается из view/study/study.php */

$this->params['jsObj'] = createJsObj($studyKitCnt);
$this->params['jsPlaybackOrder'] = createPlaybackOrder($studyKitCnt);

// формируется JS объект со списком и составом словарных статей для воспроизведения
function createJsObj($studyKitCnt)
{
    $tabNum = 2;
    // объект со списком словарных статей для воспроизведения
    $jsObj = "";

    foreach ($studyKitCnt as $wordId => $dicEntryCnt) {
        $jsObj .= tab($tabNum) . "$wordId: {\n" . getJsDicEntryCnt($dicEntryCnt, $tabNum) . tab($tabNum) . "},\n";
    }

    return "{\n" . $jsObj . "\t};\n";
}


/**
 * Формирует JS объект с содержанием словарной статьи
 * @param array $dicEntryCnt - массив с составом словарной статьи
 * @param int $tabNum
 * @return string
 */
function getJsDicEntryCnt(array $dicEntryCnt, int $tabNum): string
{
    // написание слова
    $jsObj = tab(++$tabNum) . "wordSpelling: '" . Html::encode($dicEntryCnt['wordSpelling']) . "',\n";
    // id словарной статьи в которую входит изучаемое слово
    $jsObj .= tab($tabNum) . "dicEntryId: '{$dicEntryCnt['dicEntryId']}',\n";
    // признак необходимости воспроизводить слово
    $jsObj .= tab($tabNum) . "enabled: true,\n";
    // Сформировать список переводов слова
    $jsObj .= tab($tabNum) . "wordTranslate: {\n" . renderWordTranslate($dicEntryCnt['translate'], ++$tabNum) . tab(--$tabNum) . "},\n";

    return $jsObj;
}

/**
 * Формирует js массив с последовательностью воспроизведения словарных статей
 * во время проигрывания изучаемой коллекции
 *
 * @param $studyKitCnt
 * @return string
 */
function createPlaybackOrder($studyKitCnt)
{
    // Массив id иностранных слов с последовательностью проигрывания. Нужен из-за специфики работы JS со свойствами объектов
    $jsPlaybackOrder = "";

    foreach ($studyKitCnt as $wordId => $dicEntryCnt) {
        $jsPlaybackOrder .= "$wordId, ";
    }

    return "[" . $jsPlaybackOrder . "]";
}

/**
 * Возвращает стороку из табуляций повторенных $tabNum раз
 *
 * @param $tabNum
 * @return string
 */
function tab($tabNum)
{
    return str_repeat("\t", $tabNum);
}

// Формирует список переводов слова
function renderWordTranslate($wordTranslateList, $tabNum)
{
    $jsObjTranslateList = "";
    $translatePosition = 0;
    foreach ($wordTranslateList as $wordId => $wordSpelling) {
        $jsObjTranslateList .= tab($tabNum) . "$translatePosition: {\n";

        $jsObjTranslateList .= tab(++$tabNum) . "wordId: $wordId,\n";
        $jsObjTranslateList .= tab($tabNum) . "wordSpelling: '" . Html::encode($wordSpelling) . "',\n";

        $jsObjTranslateList .= tab(--$tabNum) . "},\n";

        $translatePosition++;
    }

    return $jsObjTranslateList;
}
