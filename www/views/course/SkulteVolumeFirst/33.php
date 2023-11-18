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
            "content" => "Существительное в роли прилагательного в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Когда одно существительное стоит перед другим, оно может, не меняясь, выполнять роль 
                прилагательного.",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>pea</b>-soup", "гороховый суп", ""],
                ["<b class='color'>rice</b> porridge", "рисовая каша", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Сокращения в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "В устной течи в английском языке принято сокращать «I will» до  «I'll»",
        ],
        [
            "type" => "example",
            "content" => [
                ["I will go.", "Я пойду", ""],
                ["<b class='color'>I'll</b> go.", "Я пойду", ""],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

$lessonParts[] = [
    "type" => "speaking",
];

// «»
// <u></u>
// <b class='color'></b>

