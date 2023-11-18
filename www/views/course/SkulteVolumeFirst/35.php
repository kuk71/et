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
            "content" => "Существительные обозначающие национальности в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "Существительные, обозначающие национальности, пишутся в английском языке с большой буквы.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Russian", "русский", ""],
                ["Chinese", "китаец", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если перед существительным, обозначающим национальность, стоит определённый артикль «the», то это существительное означает весь народ этой национальности.",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>the</b> Russians", "русские", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Существительные, обозначающие национальности и оканчивающиеся на буквы «-an», во множественном числе принимают на конце «-s».",
        ],
        [
            "type" => "example",
            "content" => [
                ["the German<b class='color'>s</b>", "немцы", ""],
                ["the American<b class='color'>s</b>", "американцы", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Существительные, обозначающие национальности и не оканчивающиеся на «-an», во множественном числе не имеют окончаний.",
        ],
        [
            "type" => "example",
            "content" => [
                ["the Chinese", "китайцы", ""],
                ["the English", "англичане", ""],
                ["the French", "французы", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Словосочетание «they speak».",
        ],
        [
            "type" => "content",
            "content" => "Выражение «they speak» иногда имеет значение «<i>говорят</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["In America <b class='color'>they speak</b> English.", "В Америке <i>говорят</i> по-английски.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Значение слова «short».",
        ],
        [
            "type" => "content",
            "content" => "Слово «short» имеет 2 значения: «<i>короткий</i>» и «<i>небольшого роста</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["My kitten’s tail is very <b class='color'>short</b>.", "У моего котёнка хвост <i>короткий</i>.", ""],
                ["Mrs. Dale is <b class='color'>short</b>.", "Миссис Дэйл <i>маленького роста.</i>.", ""],
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

// «»
// <u></u>
// <b class='color'></b>

