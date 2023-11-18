<?php
// отрисовывает страницу проигрывания изучаемого альбома

use app\models\db\SettingPlayback;

/** @var var $studyKitCnt - передается из view/study/study.php */

$this->render("_study_render_js_obj", ['studyKitCnt' => $studyKitCnt]);

// получить правила воспроизведения слов
$settingPlayback = SettingPlayback::getSettingUser(\Yii::$app->user->id);
?>

<audio id='player' onended='nextWord()'>
    <source id='playerSource' src='' type='audio/mpeg'>
</audio>

<style>
    button
    {
        border: 1px solid black;
        border-radius: 5px;
    }
</style>

<div id="word" onclick="play()" style="font-size: 26pt">
    <button style="background-color: lightskyblue;"> &nbsp; Начать &nbsp;</button>
</div>

<div id="translate" onclick="play()" style="font-size: 26pt; color: red">&nbsp;</div>
<br>
<button onclick="pauseNow = 1000; previous()"><<<</button> &nbsp; &nbsp;
<button onclick="pauseNow = 1000; next()" style="background: #FFE746">Дальше >>></button><br/><br/>
<button onclick="previousWord()"><<<</button> слово
<button onclick="delWord()">исключить</button><br/><br/>
<?php

$urlListKit = "/learning_english_words";
if (!is_null(\Yii::$app->user->id)) {
    ?>

    <button onclick="repetitionWord()">В коллекцию "Повторение"</button><br/><br/>
    <?php
}
?>

<button onclick="shuffle(playbackOrder)">Перемешать слова</button> &nbsp; <button id="btnPlay" onclick="play()" style="background: #C6E746">Play</button><br/><br/>

Слов в группе <input type="text" id="wordInBlock" value="<?= $settingPlayback->word_in_block ?>" style="width: 40px; text-align: center">
<span id="wordEnabled"></span> <span id="wordNumNow"></span>
<br><br>


<button id="btnRePlay" onclick="playerReplayOff = !playerReplayOff; replay()" style="display: none">Повторять слово</button><br/>
<br/><br/>

<p style="margin-top: 40px "><a href="/study/help_word_player" target="_blank">Страница помощи >>></a></p>


<SCRIPT>
    // число слов в блоке
    //  let wordInBlock = <?= $settingPlayback->word_in_block?>
    // пауза между изучаемыми словами
    let pauseWordMilSec = <?= $settingPlayback->word_pause_mil_sec?>
    // пауза между словом и переводом
    let pauseWordTrnMilSec = <?= $settingPlayback->word_translate_mil_sec?>
    // пауза между вариантами перевода
    let pauseTrnTrnMilSec = <?= $settingPlayback->translate_option_mil_sec?>

    const mp3Dir = '/wav-mp3/'; // директория в которой лежит озвучка

    const timestampStar = <?= time()?>; // время начала прослушивания коллекции

    let playbackOrder = <?= $this->params['jsPlaybackOrder'] ?>;
    let wordStudyList = <?= $this->params['jsObj'] ?>;

</SCRIPT>
<SCRIPT src='/JS/PlaybackOrder.js?time=<?= time() ?>'></SCRIPT>
<SCRIPT src='/JS/LocalStorage.js?time=<?= time() ?>'></SCRIPT>
<SCRIPT>

    // массив для передзагрузки mp3
    let preloadAudioItems = [];
    let preloadAudioItem = 0;

    createPreloadAudioItems();

    // предзагрузка аудио
    const preloadAudioPlayer = new Audio();
    preloadAudioPlayer.src = getMp3Name(preloadAudioItems[0]);

    preloadAudioItem = 0;

    preloadAudioPlayer.addEventListener('loadeddata', function () {
        preloadAudioItem++;
        if (preloadAudioItem < preloadAudioItems.length) {
            preloadAudioPlayer.src = getMp3Name(preloadAudioItems[preloadAudioItem]);
        }
    }, false);

    // отменяет проигрывание словарных статей из локального хранилища
    for(keyEntry in learnedEntryId) {
        for(let keyWord in wordStudyList) {
            if (wordStudyList[keyWord].dicEntryId == keyEntry) {
                wordStudyList[keyWord].enabled = false;
                break;
            }
        }
    }

    function createPreloadAudioItems() {
        playbackOrder.forEach(function(value) {
            preloadAudioItems[preloadAudioItem] = value;
            preloadAudioItem++;

            let translate =  wordStudyList[value].wordTranslate;
            for (let key in translate) {
                preloadAudioItems[preloadAudioItem] = translate[key].wordId;
                preloadAudioItem++;
            }
        });
    }

    function getMp3Name(id) {
        return (mp3Dir + id + ".mp3");
    }
</SCRIPT>