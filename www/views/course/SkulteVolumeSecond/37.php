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
            "content" => "Местоимение «one».",
        ],
        [
            "type" => "content",
            "content" => "Неопределённое местоимение «one» употребляется для обозначения какого-нибудь неопределённого 
                лица.",
        ],
        [
            "type" => "example",
            "content" => [
                ["<u>One</u> never knows where he can be.", "Никогда не знаешь, где он может быть."],
                ["<u>One</u> should always be attentive at the lessons.", "Следует всегда быть внимательным на уроках."],
                ["<u>One</u> can easily learn this poem by heart.", "Можно легко выучить это стихотворение наизусть."],
            ],
        ],
        [
            "type" => "content",
            "content" => "Неопределённое местоимение «one» употребляется и для того, чтобы избежать повторения ранее 
                упомянутого исчисляемого существительного в единственном числе.",
        ],
        [
            "type" => "example",
            "content" => [
                ["Take my pencil. — Thank you, I have got <u>one</u>.", "Возьмите мой карандаш. — Спасибо, у меня есть (карандаш)."],
                ["I have not got a hammer. I must buy <u>one</u>.", "У меня нет молотка. Я должен купить (молоток)."],
                ["This is a black pencil and that is a red <u>one</u>.", "Это чёрный карандаш, а тот красный."],
            ],
        ],
        [
            "type" => "content",
            "content" => "Местоимение «one» имеет множественное число — «ones».",
        ],
        [
            "type" => "example",
            "content" => [
                ["These toys are not good. I want some new <u>ones</u>.", "Эти игрушки нехорошие. Я хочу новые (игрушки)."],
            ],
        ],
    ],
];

$lessonParts[] = [
    "type" => "lingofon",
    "num" => 1,
];
