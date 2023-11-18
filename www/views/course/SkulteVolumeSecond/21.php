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
            "content" => "Выражения «так», «так сильно», «очень» в английских предложениях.",
        ],
        [
            "type" => "content",
            "content" => "Выражение «так» - «so», «так сильно» - «so much» или  «очень» - «very much» ставятся после 
                смыслового глагола или в конце предложения.",
        ],
        [
            "type" => "example",
            "content" => [
                ["I like pears <u>very much</u>.", "Я <u>очень</u> люблю груши."],
                ["They wanted <u>so much</u> to become writers.", "Им <u>так сильно</u> хотелось стать писателями."],
            ],
        ],
        [
            "type" => "header",
            "content" => "Глагол «must».",
        ],
        [
            "type" => "content",
            "content" => "Глагол «must» — должен имеет только настоящее время (Present Indefinite Tense - Настоящее неопределённое время). В прошедшем 
                (Past Indefinite Tense - прошедшем неопределённом времени) и будущем (Future Indefinite Tense - Будущем 
                неопределённом времени) он заменяется глаголом «to have» в соответствующем времени. После глагола 
                «to have» в значении «должен» следует всегда инфинитив другого глагола с частицей «to».",
        ],
        [
            "type" => "example",
            "content" => [
                ["He <u>had to</u> go home because his mother was ill.", "Он <u>должен</u> был идти домой, так как его мать больна."],
                ["You will <u>have to</u> finish the work tomorrow.", "Тебе <u>придётся</u> (<u>ты должен</u> будешь) закончить эту работу завтра."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];

