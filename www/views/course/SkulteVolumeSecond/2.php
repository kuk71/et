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
            "content" => "Слово «what».",
        ],
        [
            "type" => "content",
            "content" => "He смешивайте «what» — «что» — вопросительное слово с «what» — «что» — союзом, соединяющим два предложения.",
        ],
        [
            "type" => "example",
            "content" => [
                ["What stands in your room?", "Что стоит в вашей комнате?"],
                ["I know what you mean.", "Я знаю, что вы имеете в виду."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Союз «that».",
        ],
        [
            "type" => "content",
            "content" => "Придаточное дополнительное предложение часто вводится без союза «that».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I think (that) I’ll get a five.", "Я думаю, (что) я получу «пятёрку»."],
            ],
        ],
        ["type" => "header",
            "content" => "Слова «good» и «well» в предложениях.",
        ],
        [
            "type" => "content",
            "content" => "Слово «good» — «хороший» — прилагательное (какой?) ставится перед существительным, которое оно определяет.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Jim is a good boy.", "Джим — хороший мальчик."],
            ],
        ],
        [
            "type" => "content",
            "content" => "Слово «well» — «хорошо» — наречие (как?) ставится после глагола, который оно определяет.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не learns well.", "Он учится хорошо."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofonAll",
    "num" => 1,
];

$lessonParts[] = [
    "type" => "speakingAll",
    "num" => 1,
];
