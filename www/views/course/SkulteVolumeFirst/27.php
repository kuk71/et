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
            "content" => "Прилагательные «many» и «much».",
        ],
        [
            "type" => "content",
            "content" => "Прилагательные «much» и «many» означают «<i>много</i>». «Many» употребляется с исчисляемыми существительными (яблоки, деревья, камни), a «much» неисчисляемыми существительными (песок, молоко, хлеб).",
        ],
        [
            "type" => "example",
            "content" => [
                ["There are many plates on this table.", "На этом столе <i>много</i> тарелок.", "Много тарелок на этом столе"],
                ["There is much milk in this jug.", "В этом кувшине <i>много</i> молока.", "Много молока в этом кувшине"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Вопросительные предложения с «there is» и «there are».",
        ],
        [
            "type" => "content",
            "content" => "При образовании вопросительной формы с конструкцией «there is» и «there are» глаголы этой конструкции ставятся на первое место.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Is there much bread on the table?", "На столе много хлеба?", "Много хлеба на столе?"],
                ["Are there many nuts in this tree?", "На этом дереве много орехов?", "Много орехов на этом дереве?"],
            ],
        ],
        [
            "type" => "content",
            "content" => "При образовании отрицательной формы с конструкцией «there is» и «there are» отрицание «no» ставится после этой конструкции.",
        ],
        [
            "type" => "example",
            "content" => [
                ["There is no cheese on the plate.", "На тарелке нет сыра.", "Нет сыра на тарелке"],
                ["There are no flowers in our garden.", "В нашем саду нет цветов", "Нет цветов в нашем саду"],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если в отрицательном предложении с конструкцией «there is» и «there are» стоит «much» или «many», то употребляется отрицание «not».",
        ],
        [
            "type" => "example",
            "content" => [
                ["There is not much milk in this bottle.", "В этой бутылке немного молока.", "Не много молока в этой бутылке"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Местоимение «any».",
        ],
        [
            "type" => "content",
            "content" => "Местоимение «some» (<i>несколько</i>, <i>некоторое количество</i>) употребляется в утвердительных предложениях. В вопросительных предложениях в том же значении употребляется «any».",
        ],
        [
            "type" => "example",
            "content" => [
                ["You have some bread.", "У вас есть хлеб.", "Вы имеете хлеб"],
                ["Have you any bread?", "У вас есть хлеб?", "Имеете вы хлеб?"],
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