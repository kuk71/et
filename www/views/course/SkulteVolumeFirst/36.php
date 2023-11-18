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
            "content" => "Глаголы «can», «may» и «must».",
        ],
        [
            "type" => "content",
            "content" => "В английском языке глаголы «can», «may» и «must» в для местоимений «he», «she» и «it» окончаний не имеют.",
        ],
        [
            "type" => "example",
            "content" => [
                ["hе <b class='color'>can</b>", "Но: <b>he go<b class='color'>es</b></b>", "он может - он идёт"],
                ["she <b class='color'>may</b>", "Но: <b>she go<b class='color'>es</b></b>", "ей можно - она идёт"],
                ["it <b class='color'>must</b>", "Но: <b>it go<b class='color'>es</b></b>", "он [она, оно (не одушевлённые)] должен - он [она, оно (не одушевлённые)] идёт"],
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

