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
            "content" => "Сравнительная степень.",
        ],
        [
            "type" => "content",
            "content" => "Сравнительная степень односложных прилагательных образуется при помощи суффиксов «-r» «-er».",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["loud / louder", "громкий / громче", ""],
                ["warm / warmer", "тёплый / теплее", ""],
                ["late / later", "поздно / позднее", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Вопросительные предложения.",
        ],
        [
            "type" => "content",
            "content" => "Если предложения начинаются с вспомогательных глаголов с отрицанием («don’t», «doesn’t», 
                «won’t», «aren’t» и т.д.), то такие предложения обычно переводятся на русский язык при помощи слова 
                «разве».",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["Don’t you know her?", "Разве вы не знаете её?", ""],
                ["Is’t he at home?", "Разве он не дома?", ""],
                ["Aren’t you glad to see him?", "Разве вы не рады видеть его?", ""],
                ["Won’t you go with us?", "Разве вы не пойдёте с нами?", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Существительные из глаголов.",
        ],
        [
            "type" => "content",
            "content" => "При помощи суффиксов «-r» или «-er» от многих глаголов можно образовать существительные.",
        ],
        [
            "type" => "example",
            "content" => [
                ["fight / fighter", "борьба / борец", ""],
                ["speak / speaker", "говорить / оратор", ""],
                ["write / writer", "писать / писатель", ""],
                ["teach / teacher", "учить / учитель", ""],
                ["run / runner", "бежать / бегун", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Наречия неопределённого времени.",
        ],
        [
            "type" => "content",
            "content" => "Наречия неопределённого времени ставятся всегда перед глаголами, но после глагола «to be»:",
        ],
        [
            "type" => "exampleNN",
            "content" => [
                ["always", "всегда", ""],
                ["already", "уже", ""],
                ["often", "часто", ""],
                ["ever", "когда-либо, когда-нибудь", ""],
                ["never", "никогда, никогда не", ""],
                ["soon", "скоро", ""],
            ],
        ],
        [
            "type" => "example",
            "content" => [
                ["We often sleep in the garden.", "Мы часто спим в саду.", ""],
                ["They never go to the cinema.", "Они никогда не ходят в кино.", ""],
                ["Не is always hungry.", "Он всегда голодный.", ""],
                ["We are already here.", "Мы уже здесь.", ""],
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

