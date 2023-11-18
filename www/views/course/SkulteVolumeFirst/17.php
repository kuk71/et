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
            "content" => "Английские выражения «as ... as» и «not so ... as».",
        ],
        [
            "type" => "content",
            "content" => "Выражение «as ... as» означает «<i>такой же ... как ...</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["This duck is <b class='color'>as</b> small <b class='color'>as</b> that hen.", "Эта утка <u>такая же</u> маленькая, <u>как</u> та курица.", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Выражение «not so ... as» означает «<i>не такой … , как ...</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["The jackal is <b class='color'>not so</b> strong <b class='color'>as</b> the wolf.", "Шакал <u>не такой</u> сильный, <u>как</u> волк.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Слово «its».",
        ],
        [
            "type" => "content",
            "content" => "Слово «its» - «его», «её», «свой» относится только к животным и неодушевлённым предметам (стол, 
                дерево, лев).",
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

$lessonParts[] = [
    "type" => "tasksLesson",
    "content" => [],
];


