<?php

use app\models\db\Lingofon;
use yii\bootstrap\Html;

/** @var $courseName - Передано из контроллера */
/** @var $lesson - Передано из контроллера */

/** @var $header - Получено из вью _index.php конкретного курса */

$name = "app\models\course\listCourse\\" . $courseName;

$LL = new $name();
$lessonsName = $LL::$lessonsName;
$lessonsContent = $LL::$lessonsContent;

require_once($courseName . "/_index.php");

$lessonKey = $LL::getLessonKey($lesson);

if ($lessonKey === false) throw new Exception("Не допустимый номер урока $lesson", 0);

$lessonName = $lessonsName[$lessonKey];
$lessonContent = $lessonsContent[$lessonKey];

$lessonNamePrev = $LL::getLessonNamePrev();
$lessonNameNext = $LL::getLessonNameNext();

$this->registerJsFile("/JS/lessonVisible.js");

putMetaTags($lessonContent, $this, $LL, $header);

echoStyle();

echoHeaders($lessonName, $header);

echoLesson($lessonName, $lessonContent, $courseName, $LL);

echoMoveLessons($lessonKey, $lessonNamePrev, $lessonNameNext, $LL, $lessonContent);

function echoLesson($lessonName, $lessonContent, $courseName, $LL)
{
    /**
     * @var  $lessonParts - массив содержимого урока. Получается из файла урока $fileLessonName
     */

    // отрисовывает урок
    $fileLessonName = "$courseName/" . $lessonContent['file'] . ".php";
    require $fileLessonName;

    foreach ($lessonParts as $part) {
        switch ($part['type']) {
            case ("paragraph"):
                echoParagraph($part["content"]);
                break;
            case ("theory"):
                echoTheory($part["content"]);
                break;
            case ("WordsToStudy"):
                echoWordsToStudy($lessonContent, $LL, $part);
                break;
            case ("lingofon"):
                echoLingofon($lessonContent, $part);
                break;
            case ("lingofonAll"):
                echoLingofonAll($lessonContent);
                break;
            case ("speaking"):
                echoSpeaking($lessonContent, $part);
                break;
            case ("speakingAll"):
                echoSpeakingAll($lessonContent, $part);
                break;
        }
    }
}

function echoParagraph($content)
{
    echo "<div class='paragraph'>";

    foreach ($content as $part) {
        switch ($part["type"]) {
            case "header":
                echo "<h3>{$part["content"]}</h3>";
                break;
            case "subtitle":
                echo "<h4>{$part["content"]}</h4>";
                break;
            case "content":
                echo "<p class='content'>{$part["content"]}</p>";
                break;
            case "example":
                echoExample($part["content"]);
                break;
            case "exampleNN":
                echoExample($part["content"], "");
                break;
        }
    }

    echo "</div>";
}

function echoExample($examples, $title = "Пример")
{
    if ($title != "") {
        $title .= ":";
    }

    $content = "
        <div class='example'><p class='exampleH'>$title</p>";

    foreach ($examples as $example) {
        $spacer = "";
        $content .= "<p class='exampleCont'>";

        if ($example[0] !== "") {
            $content .= "<span class='exampleText'>{$example[0]}</span>";

            $spacer = " — ";
        }


        if (isset($example[1]) && $example[1] !== "") {
            $content .= "{$spacer}<span class='exampleTr'>{$example[1]}</span>";
        }

        if (isset($example[2]) && $example[2] !== "") {
            $content .= " (<span class='exampleVr'>{$example[2]}</span>)";
        }

        $content .= "</p>";
    }

    echo $content . "</div>";
}

/**
 * @param $this
 * @return void
 */
function putMetaTags($lessonContent, $view, $LL, $header)
{
    $view->title = "{$lessonContent['description']} $header  Бесплатное обучение. Урок номер {$LL::getLessonKey()}";
    $view->params['keywords'] = "английский язык, обучение, бесплатно, Валенина Скультэ, английский для детей";
    $view->params['description'] = "Урок номер {$LL::getLessonKey()} по учебнику Валентины Скульте Английский язык для детей. Бесплатное обучение. {$lessonContent['description']}";
}

function echoStyle()
{
    ?>

    <style>
        p {
            font-size: 20px;
        }

        b.color {
            color: red
        }

        div.example {
            padding: 0px 0 0px 10px;
        }

        p.exampleH {
            text-decoration: underline;
            #font-weight: bold;
            font-size: 18px;
            font-style: italic;
            margin: 0 0 10px;
        }

        p.exampleCont {
            margin: 0;
            font-size: 18px;
        }

        p.lingofonContent {
            margin: 0;
            font-weight: bold;
            font-size: 18px;
        }

        p.lingofonTranslation {
            font-size: 18px;
        }

        span.exampleText {
            font-weight: bold;
        }

        span.exampleVr {
            font-style: italic;
        }

        div.paragraph {
            padding: 0 0 20px 0px;
        }

        div.paragraph h3 {
            padding: 20px 0 0;
        }

        div.paragraph h4 {
            padding: 20px 0 0;
        }

        div.paragraph p.content {
            padding: 10px 0 0 0px;
            margin: 0;
        }

        div.wordToStudy {
            padding: 0 0 10px 20px;
            font-weight: bold;
            font-size: 20px;
        }

        div.controlVisible {
            padding: 0 0 10px 20px;
        }

        div.page {
            text-align: center;
            padding: 20px 0 100px;
            font-size: 20px;
        }

        p.help {
            font-size: 18px;
            margin: 0 0 0 20px;
        }

        p.task {
            font-size: 20px;
            margin: 10px 0 0;
        }

        .text_line {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .en, .ru, .tr {
            font-size: 20px;
            width: 400px;
            padding: 0 20px;
        }

        .en {
            font-weight: bold;
        }

        .ru {
            /*display: none;*/
            display: none;
        }

        .tr {
            background-color: aliceblue;
            display: flex;
            cursor: pointer;
            border: 1px solid gray;
            border-radius: 5px;
        }

        .tr div {
            margin: auto;
        }

        .tr div:before {
            content: "Показать перевод";
        }

        a.lng:visited {
            color: green;
        }
    </style>

    <?php
}

function echoHeaders($lessonName, $header)
{
    echo "
    <h1>$header</h1>
    <h2>{$lessonName['nameRu'][0]} урок. {$lessonName['nameEn']} lesson.</h2>

    ";
}


function echoTheory($content)
{
    echo "<div class='paragraph'>";
    echo "<h3>Объяснения к уроку.</h3>";

    echo "<div class='controlVisible'>
                <a href='' onclick='return changeVisible(\"theoryVisible\");'>
                <span id='theoryVisibleControl'>Свернуть</span> теорию.</a></div>";
    echo "<div id='theoryVisible'>";

    foreach ($content as $part) {
        switch ($part["type"]) {
            case "header":
                echo "<h4>{$part["content"]}</h4>";
                break;
            case "content":
                echo "<p class='content'>{$part["content"]}</p>";
                break;
            case "example":
                echoExample($part["content"]);
                break;
            case "exampleNN":
                echoExample($part["content"], "");
                break;
        }
    }

    echo "</div></div>";
}

function echoSpeaking($lessonContent, $part)
{
    $lingofonLessonId = $lessonContent['lingofon_lesson_id_speaking'][0];

    $lingofonPart = "";
    if (isset($part['num'])) {
        $lingofonPart = "&nbsp;№&nbsp;{$part['num']}";
        $lingofonLessonId = $lessonContent['lingofon_lesson_id_speaking'][($part['num'] - 1)];
    }

    echo "<div class='paragraph'>";
    echo "<h3> Разговорное упражнение&nbsp;$lingofonPart:</h3>";

    echo "<div class='wordToStudy'><a class='lng' target='_blank' href='/lingofon/lingofon_content_play?lingofon_lesson_id[]={$lingofonLessonId}&speaking'>Пройдите разговорный&nbsp;урок$lingofonPart&nbsp;»»»</a></div>";

    echo "</div>";
}

function echoSpeakingAll($lessonContent)
{
    if (!isset($lessonContent['lingofon_lesson_id_speaking']) || !is_array($lessonContent['lingofon_lesson_id_speaking']) || count($lessonContent['lingofon_lesson_id_speaking']) === 0) {
        return;
    }

    echo "<div class='paragraph'>";
    $header = "Разговорное&nbsp;упражнение:";

    if(count($lessonContent['lingofon_lesson_id']) > 1) {
        $header = "Разговорные&nbsp;упражнения:";
    }

    echo "<h3>$header</h3>";
    $lingofonNum = 0;
    foreach($lessonContent['lingofon_lesson_id_speaking'] AS $ligofonId) {
        $lingofonNum++;
        echo "<div class='paragraph'>";
        echo "<div class='wordToStudy'>
                <a class='lng' target='_blank' 
                href='/lingofon/lingofon_content_play?lingofon_lesson_id[]={$ligofonId}&speaking'>
                Пройдите разговорный&nbsp;урок$lingofonNum&nbsp;»»»</a></div>";

        echo textLingofon($ligofonId, 'speaking');
        echo "</div>";
    }
}

function echoLingofonAll($lessonContent) {
    if (!isset($lessonContent['lingofon_lesson_id']) || !is_array($lessonContent['lingofon_lesson_id']) || count($lessonContent['lingofon_lesson_id']) === 0) {
        return;
    }

    echo "<div class='paragraph'>";
    $header = "Лингафонный&nbsp;урок:";

    if(count($lessonContent['lingofon_lesson_id']) > 1) {
        $header = "Лингафонные&nbsp;уроки:";
    }

    echo "<h3>$header</h3>";
    $lingofonNum = 0;
    foreach($lessonContent['lingofon_lesson_id'] AS $ligofonId) {
        $lingofonNum++;
        echo "<div class='paragraph'>";
        echo "<div class='wordToStudy'>
            <a class='lng' target='_blank' 
                href='/lingofon/lingofon_content_play?lingofon_lesson_id[]={$ligofonId}'
                >Прослушайте аудио урок №$lingofonNum&nbsp;»»»</a>
            </div>";

        echo textLingofon($ligofonId);
        echo "</div>";
    }
}

function echoLingofon($lessonContent, $part)
{
    $lingofonLessonId = $lessonContent['lingofon_lesson_id'][0];

    $lingofonPart = "";
    if (isset($part['num'])) {
        $lingofonPart = "&nbsp;№&nbsp;{$part['num']}";
        $lingofonLessonId = $lessonContent['lingofon_lesson_id'][($part['num'] - 1)];
    }
    echo "<div class='paragraph'>";
    echo "<h3>Лингафонный&nbsp;урок{$lingofonPart}:</h3>";

    echo "<div class='wordToStudy'>
            <a class='lng' target='_blank' 
                href='/lingofon/lingofon_content_play?lingofon_lesson_id[]={$lingofonLessonId}'
                >Прослушайте аудио урок$lingofonPart&nbsp;»»»</a>
            </div>";

    echo textLingofon($lingofonLessonId);

    echo "</div>";
}

function textLingofon($lessonId, $whoseText = 'lingofon')
{
    $prefixJsId = "s";

    if ($whoseText === 'lingofon') {
        $prefixJsId = "l";
    }

    $lessonContent = Lingofon::getLessonContent([$lessonId]);
    $jsLessonId = "{$prefixJsId}{$lessonId}";

    echo "<div class='wordToStudy'>
            <a style='font-size:16px; font-weight: normal' href='' onclick='return changeVisible(\"{$jsLessonId}\");'>
                <span id='{$jsLessonId}Control'>Развернуть</span> текст урока.</a>
            </div>";

    echo "<div id='{$jsLessonId}' class='wordToStudy' style='font-weight: normal; display: none'>";
    echo "<p style='font-size: 0.8em'>Что бы увидеть перевод предложения кликните по нему.</p>";
    foreach ($lessonContent AS $lessonLine) {
        $jsLineId = "{$jsLessonId}n{$lessonLine['lingofon_content_num']}";

        echo "<div onclick='changeVisible(\"{$jsLineId}\")' style='margin: 0 0 10px'>";
        echo "<p class='lingofonContent'>{$lessonLine['lingofon_content']}</p>";
        echo "<p id='{$jsLineId}' class='lingofonTranslation' style='display: none'>{$lessonLine['lingofon_translation']}</p>";
        echo "</div>";
    }

    echo "</div>";
}

function echoWordsToStudy($lessonContent, $LL, $part)
{

    if (!isset($part['num'])) {
        $part['num'] = 1;
    }

    $key = $part['num'] - 1;

    echo "<div class='paragraph'>";
    echo "<h3>Новые слова:</h3>";


    $wordList = $LL::getWordList($key);

    echo "<div class='wordToStudy'><a target='_blank' href='/study?kitId={$lessonContent['wordsKitId'][$key]}'>
            Перейти к изучению слов »»»</a></div>";

    $visibleStyle = "";
    $visibleWord = "Свернуть";
    if (count($wordList) > 10) {
        $styleVisible = " style = 'display: none'";
        $visibleWord = "Развернуть";
    }

    echo "<div class='controlVisible'>
                <a style='font-size:16px; font-weight: normal' href='' onclick='return changeVisible(\"wordVisible\");'>
                <span id='wordVisibleControl'>{$visibleWord}</span> список слов.</a></div>";

    echo "<div id='wordVisible'{$styleVisible}>";

    $i = 0;
    foreach ($wordList as $word) {
        $i++;
        $translate = implode(", ", $word[2]);

        echo "
            <div style='padding: 0 0 3px; margin-left: -15px; display: flex; flex-wrap: nowrap; border: 0px solid red'>
                <div style='text-align: right; min-width: 25px; font-size: 0.7em; padding-top: 5px; border: 0px solid yellow'>$i.&nbsp;</div>
                <div style='vertical-align: top; border: 0px solid green'><b>" . Html::encode($word[1]) . "</b> - " . Html::encode($translate) . "</div>
            </div>";
    }

    echo "</div>";
}

function echoMoveLessons($lessonKey, $lessonNamePrev, $lessonNameNext, $LL, $lessonContent)
{
    echo "
    <div class='page'>";

    if ($lessonContent['file'] == 0) {
        echo "<h2 style='text-align: left'><a href='" . $lessonNameNext . "'>Начать первый&nbsp;урок&nbsp;»»»</a></h2>";
    } else {
        if ($lessonNamePrev !== "") {
            echo "<a href='" . $lessonNamePrev . "'>««« </a> ";
        }

        echo "урок";

        if ($lessonNameNext !== "") {
            echo " <a href='" . $LL::getLessonNameNext() . "'>следующий »»»</a>";
        }
    }
    echo "</div>";
}

