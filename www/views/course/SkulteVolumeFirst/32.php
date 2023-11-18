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
            "content" => "Предлог «out of».",
        ],
        [
            "type" => "content",
            "content" => "Предлог «out of» означает «<i>из</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>out of</b> the room", "из комнаты", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Глагол «leave».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «leave» означает «<i>покидать</i>», «<i>уходить из</i>», «<i>уезжать</i>», «<i>оставлять</i>» и не требует после себя никакого предлога.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I <b class='color'>leave</b> your room.", "Я ухожу из вашей комнаты.", "Я покидаю вашу комнату"],
            ],
        ],
        [
            "type" => "header",
            "content" => "Настоящее неопределённое время (Present Indefinite Tense) в английском языке",
        ],
        [
            "type" => "content",
            "content" => "Все глаголы в 3-м лице ед. числа («he», «she», «it») в Present Indefinite Tense (в настоящем 
                неопределённом времени) имеют окончание «-s» или «-es».",
        ],
        [
            "type" => "example",
            "content" => [
                ["Lily say<b class='color'>s</b>.", "Лили говорит.", ""],
                ["Jim ask<b class='color'>s</b>.", "Джим спрашивает.", ""],
                ["He go<b class='color'>еs</b>.", "Он идет.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Наречие «also».",
        ],
        [
            "type" => "content",
            "content" => "Наречие «also» - «<i>тоже</i>» ставится всегда перед глаголом, кроме глагола «to be» («am», «is», «are»). «Also» ставится после глагола «to be».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I <b class='color'>also</b> run very fast.", "Я тоже бегаю очень быстро.", ""],
                ["I	am <b class='color'>also</b> in the garden.", "Я тоже в саду.", ""],
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
