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
            "content" => "Вопросительные предложения в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "При построении вопросительного предложения глаголы «have», «has» и «is» ставятся в предложении на первое место.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Has the boy a dog?", "Есть у мальчика собака?", ""],
                ["Is the fox in the box?", "Находится лиса в коробке?", "В коробке есть лиса?"],
                ["Have you a cow?", "У тебя есть корова?", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если в предложении есть вопросительные слова, то они в предложении ставятся перед глаголом.",
        ],
        [
            "type" => "example",
            "content" => [
                ["What is in the box?", "Что в коробке?", "Что находится в коробке?"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Ответы на вопросы в английском языке.",
        ],
        [
            "type" => "content",
            "content" => "На вопросы можно давать полные или краткие ответы.",
        ],
        [
            "type" => "content",
            "content" => "<em>Полный ответ</em>",
        ],
        [
            "type" => "example",
            "content" => [
                ["Yes, I have a copy-book.", "Да у меня есть тетрадь."],
                ["Yes, he has a gun.", "Да, у него есть ружьё."],
                ["No, I have no pistol.", "Нет, у меня нет пистолета."],
                ["No, he has no snake.", "Нет, у него нет змеи."],
            ],
        ],
        [
            "type" => "content",
            "content" => "<em>Краткий ответ:</em>",
        ],
        [
            "type" => "example",
            "content" => [
                ["Yes, I have.", "Да, у меня есть."],
                ["Yes, he has.", "Да у него есть."],
            ],
        ],
        [
            "type" => "content",
            "content" => "В кратких отрицательных ответах после глагола ставится отрицание «not».",
        ],
        [
            "type" => "example",
            "content" => [
                ["No, I have not.", "Нет, у меня нет."],
                ["No, he has not.", "Нет у него нет."],
            ],
        ]

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