<?php
// вид выводит проигрыватель лингафонного урока

use yii\helpers\Html;

/** @var $model app\models\lingofon\LessonContent */
/** @var $this yii\web\View */
/** @var $speaking - признак будет прослушивание или языковая практика получена из контроллера */


$content = $model->getContent();

if (count($content) === 0) {
    Yii::$app->response->redirect(['/lingofon']);
}

// сформировать заголовки для HTML
$lessonDescription = $model->getLessonDescription();
$lessonName = Html::encode($lessonDescription[0]['lingofon_lesson_name']);

$this->title = "Система проигрывания лингафонного аудированного урока. Урок: \"$lessonName\"";
$this->params['keywords'] = "английский язык, обучение, бесплатно, лингафонный, аудированный, урок";
$this->params['description'] = "Система проигрывания лингафонного аудированного урока. Существенно повышает скорость 
    изучения английского языка. Учит воспринимать английскую речь на слух. Тренирует правильное произношение. Учит 
    устной английской речи.";


// определить доступные темпы воспроизведения
$tempoSpeech = 0;
$tempoSpeechAvailable = "[]";
if ($lessonDescription[0]['tempo_speech'] !== "") {
    $tempoSpeechList = explode(",", $lessonDescription[0]['tempo_speech']);
    $tempoSpeechList = array_map('intval', $tempoSpeechList);

    $tempoSpeech = array_shift($tempoSpeechList);
    $tempoSpeech = 60; // сделано временно по умолчанию
    // получить массив доступных темпов воспроизведения
    $tempoSpeechAvailable = "[" . implode(',', $tempoSpeechList) . "]";
}

// сформировать JS массивы с текстом и переводом урока
$contentText = "";
$contentTranslation = "";

$lingofonId = $content[0]['lingofon_id'];
$lingofonLessonNum = $content[0]['lingofon_lesson_num'];
$lingofonLessonPart = $content[0]['lingofon_lesson_part'];

foreach ($content as $item) {
    // $contentUrl .= "'/lingofon_audio/{$item['lingofon_lesson_id']}/{$item['lingofon_content_num']}.mp3',";
    $contentText .= '"' . $item['lingofon_content'] . '",';
    $contentTranslation .= '"' . $item['lingofon_translation'] . '",';
}


?>
<style>
    button {
        border-radius: 5px;
        border: 1px solid black;
    }

    p {
        margin: 5px
    }

    h2 {
        font-size: 20pt;
    }

    div.translation {
        font-size: 22pt;
    }

    div.block {
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: space-between;
        flex-flow: row nowrap;
        margin: 0 0 20px;
        display: flex;
    }
</style>

<div style="width: 300px; margin: 0px;">
    <div class='block'>
        <button id="play" style="width: 70px; background: #C6E746" onclick="playStartStop()">Play</button>
        <button onclick="playPrev()"><<<</button>
        <button style="background: #FFE746" onclick="playNext()">Далее&nbsp;>>></button>
    </div>

    <?php
    if (!$speaking) {
        ?>

        <div class='block'>
            <button id="oneAll" style="width: 160px"
                    onclick="buttonText('oneAll', isOne, 'Проигрывать&nbsp;всё', 'По&nbsp;одному')"
            >Проигрывать&nbsp;всё
            </button>
            &nbsp;
            <button id="repeat" onclick="buttonText('repeat', isRepeat, 'Без&nbsp;повтора', 'Повторять')"
                    style="width: 130px">Без&nbsp;повтора
            </button>
        </div>

        <div class='block'>
            <button id='textB' onclick="textVisible()" style="width: 90px">Текст&nbsp;+</button>
            <button id='translationB' onclick="translationVisible()" style="width: 120px">Перевод&nbsp;+</button>
            &nbsp; &nbsp;

        </div>
        <?php
    }
    ?>
<!--
    <div id="tempoSpeech" style="display: none; margin-top : -15px;"><p>Темп речи (%):
            <span style="cursor: pointer; font-weight: normal; color: blue" onclick="tempoChangePlay(40)">40</span> ,
            <span style="cursor: pointer; font-weight: normal; color: blue" onclick="tempoChangePlay(60)">60</span> ,
            <span style="cursor: pointer; font-weight: normal; color: blue" onclick="tempoChangePlay(80)">80</span> ,
            <span style="cursor: pointer; font-weight: normal; color: blue" onclick="tempoChangePlay(100)">100</span> ,
            <span style="cursor: pointer; font-weight: normal; color: blue" onclick="tempoChangePlay(140)">140</span></p>

    </div>
-->
    <div id="tempoSpeech" style="display: none; margin-top : -15px;"></div>

    <div id="textTranslation" onclick="clickOnText();"
         style="border: 0px solid black; margin: 20px 0; min-height: 150px">
        <div id="text" class="translation" style="display: none; color: black; user-select: none;"></div>

        <div id="translation" class="translation"
             style="display: none; color: blue; margin: 20px 0 0; user-select: none;"></div>
        <br/>
    </div>

    <div id="fontSizeChange" style="display: none">
        <button onclick="fontReSize(+1)">Шрифт&nbsp;+</button>
        &nbsp; &nbsp; &nbsp; &nbsp;
        <button onclick="fontReSize(-1)">Шрифт&nbsp;-</button>
    </div>

    <audio id='player' onended='setTimeout(onward(), 100);'>
        <source id='playerSource' src='' type='audio/mpeg'>
    </audio>

    <span id="nowSound">1</span> - <span><?= count($content) ?></span>

</div>
<br>


<br>
<?php
if ($speaking) {
    echo '<a href="/lingofon/help_speaking_player"
   title="Страница помощи по уроку разговорной практики английского языка" target="_blank">Как
    пользоваться страницей урока разговорной практики?</a>';
} else {
    echo '<a href="/lingofon/help_lingofon_lesson_player"
   title="Страница помощи по использованию проигрывателя аудированного урока английского языка" target="_blank">Как
    пользоваться проигрывателем аудио урока?</a>';
}
?>

<script>
    const typeSpeaking = <?= ($speaking) ? "true" : "false" ?>;
    let typeSpeakingShowText = false;

    const player = document.getElementById('player');
    const text = document.getElementById('text');
    const translation = document.getElementById('translation');
    const textTranslation = document.getElementById('textTranslation');
    const startStop = document.getElementById("play");

    let tempoSpeech = <?= $tempoSpeech ?>;
    const tempoSpeechAvailable = <?= $tempoSpeechAvailable ?>;

    const textList = [<?= $contentText ?>];
    const translationList = [<?= $contentTranslation ?>];

    let playbackRate = 1.0;
    const lingofonId = <?= $lingofonId ?>;
    const lingofonLessonNum = <?= $lingofonLessonNum ?>;
    const lingofonLessonPart = <?= $lingofonLessonPart ?>;
    let urlList = [];

    contentUrl(tempoSpeech);

    // вывести информацию о доступной скорости воспроизведения
    displayTempSpeechList();


    let fontSize = 22;
    let notRepeat = true;
    let nowSound = 0;
    let countSound = <?=count($content)?>;
    let playOn = false;
    let isTextVisible = [false];
    let isTranslationVisible = [false];
    let isOne = [true];
    let isRepeat = [true];

    // время первого клика по тексту или переводу
    let firstClickOnText = 0;
    let timerIdPlayNext;

    printText(nowSound);

    // предзагрузка аудио
    const preloadAudio = new Audio();
    preloadAudio.src = urlList[0];
    let preloadAudioItem = 0;

    preloadAudio.addEventListener('loadeddata', function () {
        preloadAudioItem++;
        if (preloadAudioItem != countSound) {
            preloadAudio.src = urlList[preloadAudioItem];
        }
    }, false);

    function buttonText(buttonId, flag, flagTrueText, flagFalseText) {
        flag[0] = !flag[0];

        let title = flagFalseText;

        if (flag[0]) {
            title = flagTrueText;
        }

        document.getElementById(buttonId).innerHTML = title;
    }

    function startLesson() {
        if (typeSpeaking) {
            translation.style.display = '';
            translation.innerHTML = "<b style='font-size: 0.7em; color: black;'>Переведите на английский:<br></b>" + translation.innerHTML;
            text.style.display = 'none';

            isRepeat = [false];
        }

        if (typeSpeakingShowText) {
            document.getElementById('text').style.display = '';
        }
    }

    function displayTempSpeechList() {
        document.getElementById('tempoSpeech').style.display = '';

        if (tempoSpeechAvailable.length === 0) {
            displayTempSpeechListPlayer()
            return;
        }

        let tempoSpeechContent = "<b><u>Темп речи (%)</u></b>: ";

        tempoSpeechAvailable.forEach((val) => {
            let tempoChange = " onclick='tempoChange(" + val + ")'";
            let selected = " font-weight: normal; color: blue";

            if (val == tempoSpeech) {
                tempoChange = "";
                selected = " font-size: 1.2em; font-weight: bold; color: black";
            }

            tempoSpeechContent += "<span style='cursor: pointer;" + selected + "'" + tempoChange + ">" + val + "</span> &nbsp;";
        });

        document.getElementById('tempoSpeech').innerHTML = tempoSpeechContent;
    }

    function displayTempSpeechListPlayer() {
        if (tempoSpeech === 0) {
            tempoSpeech = 60;
        }
        let tempoSpeechContent = "<b><u>Темп речи (%)</u></b>: ";

        const tempoSpeechAvailable = [60, 80, 100, 120, 140]

        tempoSpeechAvailable.forEach((val) => {
            let tempoChange = " onclick='tempoSpeech = " + val + "; displayTempSpeechListPlayer();'";
            let selected = " font-weight: normal; color: blue";

            if (val == tempoSpeech) {
                tempoChange = "";
                selected = " font-size: 1.2em; font-weight: bold; color: black";
            }

            tempoSpeechContent += "<span style='cursor: pointer;" + selected + "'" + tempoChange + ">" + val + "</span> &nbsp;";
        });

        document.getElementById('tempoSpeech').innerHTML = tempoSpeechContent;

        tempoChangePlay(tempoSpeech)
    }

    function tempoChange(speed) {
        tempoSpeech = speed;

        displayTempSpeechList();

        contentUrl(tempoSpeech);

        preloadAudioItem = 0;
        preloadAudio.src = urlList[0];
    }

    // меняет темп воспроизведения плеером
    function tempoChangePlay(speed) {
        tempoSpeech = speed;
        playbackRate = (speed / 100);
        player.playbackRate = playbackRate
    }

    function contentUrl(tempoSpeech) {
        let tempoSpeechDir = "";
        if (tempoSpeech !== 0) {
            tempoSpeechDir = tempoSpeech + "/";
        }


        let lingofonLessonPartUrl = "";

        if (lingofonLessonPart != 0) lingofonLessonPartUrl = lingofonLessonPart + '/';

        textList.forEach(function (item, index) {
            urlList[(index)] = '/lingofon_course/' + lingofonId + '/' + lingofonLessonNum + '/' + lingofonLessonPartUrl + tempoSpeechDir + (index + 1) + '.mp3';
        });

    }

    function textVisible() {
        buttonText("textB", isTextVisible, "Текст&nbsp;-", "Текст&nbsp;+");

        elementVisible(text, !isTextVisible[0]);

        fontSizeVisible();
    }

    function translationVisible() {
        buttonText("translationB", isTranslationVisible, "Перевод&nbsp;-", "Перевод&nbsp;+");

        elementVisible(translation, !isTranslationVisible[0]);

        fontSizeVisible();
    }

    function elementVisible(element, isVisible) {
        let display = "";

        if (isVisible) {
            display = "none";
        }

        element.style.display = display;
    }

    function playStartStop() {
        if (playOn) {
            playStop();
        } else {
            playStart();

            if (typeSpeaking) {
                text.style.display = '';
                typeSpeakingShowText = true;
            }
        }
    }

    function playStop() {
        playOn = false;
        player.pause();
        startStop.innerHTML = "Play";
    }

    function playStart() {
        playOn = true;
        playItem(nowSound);
        startStop.innerHTML = "Stop";
    }

    function onward() {
        if (!isOne[0]) {
            if (nowSound == (countSound - 1)) {
                nowSound = -1;

                if (!isRepeat[0]) {
                    playStartStop()
                }
            }

            nowSound += 1;
        } else {
            if (!isRepeat[0]) {
                playStartStop()
            }
        }

        playItem(nowSound)
    }

    function playItem(nowSound) {
        printText(nowSound);
        document.getElementById('nowSound').innerHTML = nowSound + 1;
        player.src = urlList[nowSound];

        if (playOn) {
            player.play();
            player.playbackRate = playbackRate;
        }
    }

    function playPrev() {
        nowSound -= 1;

        if (nowSound == -1) {
            nowSound = countSound - 1;
        }

        typeSpeakingShowText = false;

        playItem(nowSound)
    }

    function clickOnText() {
        let dateNow = Date.now();
        if ((dateNow - firstClickOnText) < 300) {
            clearTimeout(timerIdPlayNext);
            document.getSelection().removeAllRanges();
            playStartStop();
        } else {
            timerIdPlayNext = setTimeout(playNext, 305);
        }

        firstClickOnText = dateNow;
    }

    function playNext() {
        nowSound += 1;

        if (nowSound == countSound) {
            nowSound = 0;
        }

        typeSpeakingShowText = false;

        playItem(nowSound)
    }


    function printText(nowSound) {
        let index = nowSound;
        text.innerHTML = textList[index];
        translation.innerHTML = translationList[index];

        startLesson();
    }

    function tegDisplay(idHide, idShow) {
        if (idHide) document.getElementById(idHide).style.display = 'none';
        if (idShow) document.getElementById(idShow).style.display = '';
    }

    function fontReSize(delta) {
        fontSize = fontSize + delta

        text.style.fontSize = fontSize + "pt";
        translation.style.fontSize = fontSize + "pt";

    }

    function fontSizeVisible() {
        if (document.getElementById('text').style.display == 'none' &&
            document.getElementById('translation').style.display == 'none'
        ) {
            document.getElementById('fontSizeChange').style.display = 'none';
        } else {
            document.getElementById('fontSizeChange').style.display = '';
        }


    }


    // настройка смахивания // выключено т.к. продвижение по уроку сделано кликом
    // textTranslation.addEventListener("touchstart", handleTouchStart, false);
    // textTranslation.addEventListener("touchend", handleTouchMove, false);

    let xDown = null;
    let xUp = null;

    function handleTouchStart(evt) {
        xDown = evt.touches[0].clientX;
    }

    function handleTouchMove(evt) {
        if (!xDown) {
            return;
        }

        xUp = evt.changedTouches[0].clientX;

        const xDiff = xDown - xUp;

        if (Math.abs(xDiff) < 40) {
            // движение было недостаточно длинным
            playStartStop();
            evt.preventDefault();
            return;
        }

        if (xDiff > 0) {
            playPrev();
        } else {
            playNext();
        }

        // свайп был, обнуляем координаты
        xDown = null;
        xUp = null;
    }


</script>