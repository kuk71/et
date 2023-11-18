<?php
/** @var $lessonParams - массив параметров урока. Получен из контроллера */

$lessonParts[] = [
    "type" => "WordsToStudy",
];

$lessonParts[] = [
    "type" => "theory",
    "content" => [
        [
            "type" => "header",
            "content" => "Будущее неопределённое время (Future Indefinite Tense) в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Будущее неопределённое время образуется с помощью вспомогательных глаголов «shall» (для «I» и «we») и «will» (для всех остальных лиц) и смыслового глагола в неопределённой форме без частицы «to».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I shall write a letter tomorrow.","Я буду писать письмо завтра.", "Я напишу письмо завтра."],
                ["Не will write a letter tomorrow.","Он будет писать письмо завтра.", "Он напишет письмо завтра."],
                ["She will write a letter tomorrow.","Она будет писать письмо завтра.", "Она напишет письмо завтра."],
                ["We shall write a letter tomorrow.","Мы будем писать письмо завтра.", "Мы напишем письмо завтра."],
                ["You will write a letter tomorrow.","Вы будете писать письмо завтра.", "Вы напишете письмо завтра."],
                ["They will write a letter tomorrow.","Они будут писать письмо завтра.", "Они напишут письмо завтра."],
            ],
        ],
        [
            "type" => "content",
            "content" => "Для образования вопросительного предложения глаголы «shall» или «will» ставятся на первое место.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Shall we go to the cinema tomorrow?","Мы пойдём в кино завтра?", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Иногда для «I» и «we» употребляется вспомогательный глагол «will». В этих случаях глагол «will» означает желание.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I won’t (will not) go to school tomorrow.","Я не пойду (не хочу идти) в школу завтра.", "«won’t» сокращенное написание от «will not»"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если главное предложение стоит в будущем времени, то придаточное предложение ставится в настоящем времени после союзов «if» (если), «when» (когда) и некоторых других.",
        ],
        [
            "type" => "example",
            "content" => [
                ["You will see me if I come early.","Вы увидите меня, если я приду рано.", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 2,
];

$lessonParts[] = [
    "type" => "speaking",
];