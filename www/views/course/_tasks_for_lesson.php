<?php
/**
 * @var $lessonParams - массив параметров урока. Получен из контроллера
 * @var $textToTranslate - массив с текстом для перевода и переводом
 */

echo "
    <style>
        p.help {
         font-size: 18px; 
         margin: 0 0 0 20px;
        }
    p.task {
         font-size: 20px; 
         margin: 10px 0 0;
        }
    </style>
    
    <h2>Задание на {$lessonParams['nameRu'][0]} урок</b>:</h2>
    <div style='padding-left: 20px'>
";

if (isset($lessonParams['wordsKitId'])) {
    echo "
    <p class='task'><a href=\"/study?kitId={$lessonParams['wordsKitId']}\" title=\"Программа изучения английских слов нужных для прохождения {$lessonParams['nameRu'][1]} урока английского языка.\" target=\"_blank\"><b>Выучите английские слова >>></b></a></p>
    
    <p class='help'><a href=\"/study/help_word_player\" title=\"Описание работы программы изучения английских слов\" target=\"_blank\">Тут
        можно подробно узнать как пользоваться программой изучения слов >>></a></p>
    
    <p class='task'>Тут Вы можете выбрать слова, которые хотите учить: <a
            href=\"/learning_list_english_words?kitId={$lessonParams['wordsKitId']}\"
            title=\"Список английских слов нужных для прохождения {$lessonParams['nameRu'][1]} урока английского языка.\" target=\"_blank\">Список
        слов для {$lessonParams['nameRu'][1]} урока&nbsp;>>></a></p>
    ";
}

if (isset($lessonParams['lingofon_lesson_id'])) {
    if ($lessonParams['num'] === 2) {
        echo "
        <p class='task'><a href=\"/lingofon/help_lingofon_lesson_player\" target=\"_blank\" title=\"Описание проигрывателя аудированных уроков\">
        <b>Изучите как пользоваться проигрывателем аудио уроков&nbsp;>>></b></a></p>";
    }

    echo "
        <p class='task'><b><a href=\"/lingofon/lingofon_content?lingofon_lesson_id[]={$lessonParams['lingofon_lesson_id']}\" target=\"_blank\"
            title=\"Аудированный текст к {$lessonParams['nameRu'][2]} уроку Скультэ Английский для детей\">Пройдите аудированный (лингафонный
            / озвученный) урок&nbsp;>>></a></b></p>
    ";

    if ($lessonParams['num'] !== 2) {
        echo "
        <p class='help'><a href=\"/skulte_anglijskij_dlya_detej/lessons/second_english_lesson#how_study_auditioned_lesson\" target=\"_blank\"
      title=\"Описание правил прохождения аудированного урока\">Как правильно работать с аудированным уроком описано тут&nbsp;>>></a>
</p>

    <p class='help'><a href=\"/lingofon/help_lingofon_lesson_player\" target=\"_blank\" title=\"Описание проигрывателя аудированных уроков\">
        Как пользоваться проигрывателем аудио уроков описано тут&nbsp;>>></a></p>";
    }
}

if (isset($textToTranslate)) {
    echo $this->render("_text_to_translate", ['textToTranslate' => $textToTranslate]);
}

echo "</div>";

