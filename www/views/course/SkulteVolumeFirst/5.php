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
            "content" => "Множественное число.",
        ],
        [
            "type" => "content",
            "content" => "Множественное число в английском языке образуется путем прибавления к слову окончания «-s». 
            Неопределённый артикль «a» с существительными во множественном числе не употребляется."
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>a</b> cat", "кошка", "единственное число - артикль есть"],
                ["cat<b class='color'>s</b>", "кошки", "множественное число - артикля нет"],
                ["<b class='color'>a</b> cup", "чашка", "единственное число - артикль есть"],
                ["cup<b class='color'>s</b>", "чашки", "множественное число - артикля нет"],
                ["<b class='color'>a</b> dog", "собака", "единственное число - артикль есть"],
                ["dog<b class='color'>s</b>", "собаки", "множественное число - артикля нет"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Буква «r» в конце слова.",
        ],
        [
            "type" => "content",
            "content" => "Буква «r» в конце слова обычно не читается, но если после слова, оканчивающегося на «r», идёт 
                слово, начинающееся с гласной буквы (), то конечное «r» произносится."
        ],
        [
            "type" => "example",
            "content" => [
                ["sta<b class='color'>r</b>", "", "конечная  «r» не читается"],
                ["а sta<b class='color'>r</b> <b class='color'>a</b>nd a vase", "конечная  «r» читается, т.к. следующее 
                    слово начинается с гласной буквы"],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
];

$lessonParts[] = [
    "type" => "speaking",
];