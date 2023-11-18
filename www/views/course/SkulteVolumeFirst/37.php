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
            "content" => "Дни недели в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "В английском языке дни недели пишутся с большой буквы.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Sunday", "воскресенье", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "С днями недели употребляется предлог «on».",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>on</b> Sunday", "в воскресенье", ""],
                ["<b class='color'>on</b> Sunday<b class='color'>s</b>", "по воскресеньям", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Слово «any».",
        ],
        [
            "type" => "content",
            "content" => "«Any» имеет значение «<i>всякий</i>», «<i>любой</i>», когда употребляется в утвердительных предложениях.",
        ],
        [
            "type" => "header",
            "content" => "Выражение «Let us ...»",
        ],
        [
            "type" => "content",
            "content" => "Выражение «Let us ...» означает «<i>Давайте ...</i>»",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>Let us</b> speak English!", "<i>Давайте</i> говорить по-английски!", ""],
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
