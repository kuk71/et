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
            "content" => "Сравнительная степень в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "В английском языке сравнительная степень односложных прилагательных образуется при помощи суффикса «-er».",
        ],
        [
            "type" => "example",
            "content" => [
                ["tall (высокий)", "tall<b class='color'>er</b> (выше)", ""],
                ["old (старый)", "old<b class='color'>er</b> (старше)", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Союз «than».",
        ],
        [
            "type" => "content",
            "content" => "Союз «than» при переводе c английского на русский язык может опускаться.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Не is older <b class='color'>than</b> I.", "Он старше меня", "Он старше чем я"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Вопросы «What is he?» и «Who is he?»",
        ],
        [
            "type" => "content",
            "content" => "Вопрос «What is he?» означает «<i>чем занимается человек?</i>», «<i>кто он по профессии?</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>What is</b> Mr. Dale? Не is a driver.", "Кто мистер Дэйл? Он шофёр", "Кто по профессии мистер Дэйл?"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Вопрос «Who is he?» означает «<i>как фамилия человека?</i>», «<i>чей он родственник?</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>Who is</b> that man? Не is Mr. Christine, Lily’s father.", "Кто тот человек? Это мистер Кристин, отец Лили.", ""],
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