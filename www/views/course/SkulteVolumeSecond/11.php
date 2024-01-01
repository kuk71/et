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
            "content" => "Существительные в словосочетаниях.",
        ],
        [
            "type" => "content",
            "content" => "Существительное может служить определением к другому существительному, если оно стоит перед 
                ним.",
        ],
        [
            "type" => "example",
            "content" => [
                ["school / school-teacher", "школа / школьная учительница"],
                ["peach / peach jam", "персик / персиковое варенье"],
                ["goat / goat milk", "коза / козье молоко"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Префикс «un-».",
        ],
        [
            "type" => "content",
            "content" => "Префикс «un-» означает отрицание или противоположное качество.",
        ],
        [
            "type" => "example",
            "content" => [
                ["like / unlike", "похожий / непохожий"],
                ["to dress / to undress", "одевать / раздевать"],
                ["interesting / uninteresting", "интересный / неинтересный"],
                ["happy / unhappy", "счастливый / несчастный"],
                ["well / unwell", "здоровый / нездоровый"],
                ["real / unreal", "настоящий / ненастоящий"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Глаголы оканчивающиеся на «-ie».",
        ],
        [
            "type" => "content",
            "content" => "Если глагол оканчивается на «-ie», то перед окончанием «ing» буква «e» опускается, а буква «i» меняется на «y»:",
        ],
        [
            "type" => "example",
            "content" => [
                ["lie / lying", "лежать / лежащий, лёжа"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Предлог «down».",
        ],
        [
            "type" => "content",
            "content" => "Предлог «down» с глаголом означает движение вниз.",
        ],
        [
            "type" => "example",
            "content" => [
                ["lie / lie down", "лежать / ложиться"],
                ["sit / sit down", "сидеть / садиться"],
                ["go / go down", "идти / спускаться"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Слово «flesh».",
        ],
        [
            "type" => "content",
            "content" => "Слово «flesh» означает «мясо» вообще, а не для еды.",
        ],
        [
            "type" => "example",
            "content" => [
                ["The flesh of the pig is pork.", "Мясо поросёнка — это свинина."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Суффикс  «-ly» в наречиях.",
        ],
        [
            "type" => "content",
            "content" => "Перед суффиксом наречия «-ly» буква «y» меняется на «i».",
        ],
        [
            "type" => "example",
            "content" => [
                ["angry / angrily", "сердитый / сердито"],
                ["lazy / lazily", "ленивый / лениво"],
                ["greedy / greedily", "жадный / жадно"],
            ],
        ],
        [
            "type" => "content",
            "content" => "<u>Исключение</u>:",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["sly / slyly", "хитрый / хитро"],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofonAll",
];

$lessonParts[] = [
    "type" => "speakingAll",
];


