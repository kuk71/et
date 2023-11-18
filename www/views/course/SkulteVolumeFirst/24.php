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
            "content" => "Глаголы «can», «may» и «must»",
        ],
        [
            "type" => "content",
            "content" => "Глагол «may» означает «<i>могу</i>» в значении «<i>имею разрешение</i>». Глагол «can» означает 
                «<i>могу</i>» в значении «<i>умею (в состоянии что-либо сделать)</i>». Глагол «must» означает 
                «<i>должен</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["You are strong, you <b class='color'>can</b> open this box.", "Ты сильный, ты можешь открыть этот ящик.", ""],
                ["Mr. Dale is not a boy, he <b class='color'>may</b> smoke.", "Мистер Дэйл не мальчик, ему можно курить.", ""],
                ["I <b class='color'>must</b> go to school.", "Я должен идти в школу.", ""],
                ["Не <b class='color'>must</b> learn well.", "Он должен хорошо учиться.", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "«May» и «must», как и «can», при вопросе ставятся на первое место, а при отрицании после «may» 
                и «must» ставится отрицание not, которое пишется отдельно.",
        ],
        [
            "type" => "example",
            "content" => [
                ["<b class='color'>May</b> I go to the cinema?", "Можно мне пойти в кино?", ""],
                ["<b class='color'>May</b> I smoke in this room? No, you <b class='color'>may not</b>.", "Можно мне курить в этой комнате? — Нет, нельзя. ", ""],
                ["<b class='color'>Must</b> you go to school today?", "Ты должен идти сегодня в школу?", ""],
                ["Lily <b class='color'>must not</b> go to the cinema.", "Лиля не должна идти в кино.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Слово «too».",
        ],
        [
            "type" => "content",
            "content" => "Если слово «too» стоит в конце фразы, то оно значит «<i>тоже</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["I have many books <b class='color'>too</b>.", "У меня <i>тоже</i> есть много книг.", "У меня есть много книг <i>тоже</i>."],
            ],
        ],
        [
            "type" => "content",
            "content" => "Если слово «too» стоит перед словом, к которому оно относится, то оно означает «<i>слишком</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["This dress is <b class='color'>too</b> long.", "Это платье <i>слишком</i> длинное.", ""],
            ],
        ],
        [
            "type" => "header",
            "content" => "Словосочетания «to be in bed» и «Come to see me»",
        ],
        [
            "type" => "content",
            "content" => "«to be in bed» означает «<i>находиться в постели</i>» или «<i>лежать</i>».",
        ],
        [
            "type" => "example",
            "content" => [
                ["Why are you in bed? Are you ill?", "Почему вы лежите? Больны?", ""],
            ],
        ],
        [
            "type" => "content",
            "content" => "Английское выражение «Come to see mе!» на русский переводится «<i>Приходите ко мне!</i>»",
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
