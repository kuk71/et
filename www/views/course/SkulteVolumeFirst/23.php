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
            "content" => "Глаголы в неопределённой форме",
        ],
        [
            "type" => "content",
            "content" => "Если перед глаголом стоит частица «to», значит глагол стоит в неопределённой форме, т. е. не имеет ни лица, ни числа. В русском языке глаголы в неопределённой форме имеют окончание «-ть».",
        ],
        [
            "type" => "example",
            "content" => [
                ["to read ", "читать", ""],
                ["to run ", "бегать", ""],
                ["to swim", "плавать", ""],
                ["to fly", "летать", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Перед глаголом «can» («могу», «умею») частица «to» не ставится.",
        ],
        [
            "type" => "header",
            "content" => "Глаголы после «can».",
        ],
        [
            "type" => "content",
            "content" => "После глагола «can» следующий глагол в неопределённой форме всегда ставится без частицы «to».",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не can read.", "Он умеет читать.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Глагол «can» в вопросительных предложениях.",
        ],
        [
            "type" => "content",
            "content" => "В вопросительных предложениях глагол «can» ставится на первое место.",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>Can</b> this girl swim?", "Умеет эта девочка плавать?", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Отрицание с глаголом «can»",
        ],
        [
            "type" => "content",
            "content" => "При отрицании после глагола «can» идёт отрицание «not», которое пишется с глаголом слитно.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не can<b class='color'>not</b> run fast.", "Он не умеет бегать быстро.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Буква «w» перед «r».",
        ],
        [
            "type" => "content",
            "content" => "Буква «w» перед «r» ни не читается.",
        ],
        [
            "type" => "header",
            "content" => "Выражение «at all».",
        ],
        [
            "type" => "content",
            "content" => "Выражение «at all» — <i>«совсем»</i> употребляется при отрицании и ставится в конце предложения.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I cannot swim <b class='color'>at all</b>.", "Я совсем не умею плавать.", "Я не умею плавать совсем."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Наречие определяющее сказуемое.",
        ],
        [
            "type" => "content",
            "content" => "Наречие, определяющее сказуемое, ставится в конце предложения.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I can read <b class='color'>very fast</b>.", "Я могу читать <i>очень быстро</i>.", ""],
                ["They swim <b class='color'>well</b>.", "Они плавают <i>хорошо</i>.", ""],
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

