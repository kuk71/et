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
            "content" => "Слова «sheep» и «deer».",
        ],
        [
            "type" => "content",
            "content" => "Слова «sheep» - «овца» и «deer» - «олень» во множественном числе не изменяют своей формы.",
        ],
        [
            "type" => "example",
            "content" => [
                ["one <u>sheep</u> / two <u>sheep</u>", "одна овца / две овцы"],
                ["one <u>deer</u> / four <u>deer</u>", "один олень / четыре оленя"],
            ],
        ]
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

