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
            "content" => "Глагол «have».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «have» может иметь значение «должен». После глагола «have» в значении «должен» 
                следующий за ним глагол в неопределённой форме употребляется с частицей «to».",
        ],
        [
            "type" => "example",
            "content" => [
                ["You <u>have to</u> finish your lessons first, then you may play with your friends.", "Ты <u>должен</u> закончить уроки сначала, а потом можешь играть с друзьями."],
                ["We did not <u>have to</u> get up early on Sunday.", "Мы не <u>должны</u> были вставать рано в воскресенье."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Глагол «be».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «be», также как и глагол «have», может иметь значение «должен». Обычно глагол «be» в 
                значении «должен» употребляется в тех случаях, когда о каком-либо действии было заранее условлено или 
                договорено. После глагола «be» в значении «должен» следующий за ним глагол в неопределённой форме 
                употребляется с частицей «to».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I <u>am to</u> go to the station, and my father will wait at home.", "Я <u>должен</u> идти на станцию, а отец будет ждать дома."],
                ["Where is Sam? Не <u>was to</u> be here half an hour ago.", "Где Сэм? Он <u>должен</u> был быть здесь полчаса тому назад."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Частица «to».",
        ],
        [
            "type" => "content",
            "content" => "Часто в английском языке, чтобы не повторять один и тот же глагол в предложении (или в 
                диалоге), ставится только частица «to».",
        ],
        [
            "type" => "example",
            "content" => [
                ["Don’t drink the milk if you don’t want to.", "He пей молоко, если ты не хочешь (пить)."],
                ["Are you going to visit your aunt? Yes, I intend to.", "Ты собираешься посетить тётю? — Да, я собираюсь (посетить)."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

