<?php

namespace app\models\course\listCourse;

use app\models\course\LL;


/**
 * Модель для хранения данных об уроках по курсу Скульте
 *
 */
class SkulteVolumeFirst extends LL
{


    protected static function fillLessonsContent()
    {
        self::$lessonsContent = [
            [
                'file' => "0",
                'description' => 'Как учить английский язык?',
            ],
            [
                'file' => "1",
                'description' => 'Первое знакомство с английским языком. Неопределённый артикль «a».',
                'wordsKitId' => [349],
                'lingofon_lesson_id' => [314],
                'lingofon_lesson_id_speaking' => [314],
            ],
            [
                'file' => "2",
                'description' => 'Увеличиваем словарный запас и отрабатываем произношение английских слов.',
                'wordsKitId' => [350],
                'lingofon_lesson_id' => [315],
                'lingofon_lesson_id_speaking' => [315],
            ],
            [
                'file' => "3",
                'description' => 'Увеличиваем словарный запас и отрабатываем произношение английских слов.',
                'wordsKitId' => [351],
                'lingofon_lesson_id' => [316],
                'lingofon_lesson_id_speaking' => [316],
            ],
            [
                'file' => "4",
                'description' => 'Неопределённый артикль «a».',
                'wordsKitId' => [352],
                'lingofon_lesson_id' => [317],
                'lingofon_lesson_id_speaking' => [317],
            ],
            [
                'file' => "5",
                'description' => 'Множественное число.',
                'wordsKitId' => [353],
                'lingofon_lesson_id' => [318],
                'lingofon_lesson_id_speaking' => [318],
            ],
            [
                'file' => "6",
                'description' => 'Множественное число.',
                'wordsKitId' => [354],
                'lingofon_lesson_id' => [319],
                'lingofon_lesson_id_speaking' => [319],
            ],
            [
                'file' => "7",
                'description' => 'Порядок слов в английском предложении. Повелительные и отрицательные предложения.',
                'wordsKitId' => [355],
                'lingofon_lesson_id' => [320],
                'lingofon_lesson_id_speaking' => [320],
            ],
            [
                'file' => "8",
                'description' => 'Особенности глагола «have».',
                'wordsKitId' => [356],
                'lingofon_lesson_id' => [321, 322],
                'lingofon_lesson_id_speaking' => [322],
            ],
            [
                'file' => "9",
                'description' => 'Глагол «is» в английском языке. Определенный артикль «the» в английском языке.',
                'wordsKitId' => [357],
                'lingofon_lesson_id' => [323, 324],
                'lingofon_lesson_id_speaking' => [324],
            ],
            [
                'file' => "10",
                'description' => 'Вопросительные предложения в английском языке. Ответы на вопросы в английском языке.',
                'wordsKitId' => [358],
                'lingofon_lesson_id' => [325, 326],
                'lingofon_lesson_id_speaking' => [326],
            ],
            [
                'file' => "11",
                'description' => 'Использование словосочетания «How many» в вопросительных предложениях английского 
                            языка. Слово «it».',
                'wordsKitId' => [359],
                'lingofon_lesson_id' => [327, 328],
                'lingofon_lesson_id_speaking' => [328],
            ],
            [
                'file' => "12",
                'description' => 'Использование словосочетания «This is ...» в английском языке.',
                'wordsKitId' => [360],
                'lingofon_lesson_id' => [329, 330],
                'lingofon_lesson_id_speaking' => [330],
            ],
            [
                'file' => "13",
                'description' => 'Глагол «be» в английских предложениях.',
                'wordsKitId' => [361],
                'lingofon_lesson_id' => [331, 332],
                'lingofon_lesson_id_speaking' => [332],
            ],
            [
                'file' => "14",
                'description' => 'Особенности применения в английском языке артиклей «a» и «the» с прилагательными и 
                        числительными.',
                'wordsKitId' => [362],
                'lingofon_lesson_id' => [333, 334],
                'lingofon_lesson_id_speaking' => [334],
            ],
            [
                'file' => "15",
                'description' => 'Особенности применения в английском языке артикля «an».',
                'wordsKitId' => [363],
                'lingofon_lesson_id' => [335, 336],
                'lingofon_lesson_id_speaking' => [336],
            ],
            [
                'file' => "16",
                'description' => 'Склонение существительных и прилагательных в английском языке.',
                'wordsKitId' => [364],
                'lingofon_lesson_id' => [337, 338],
                'lingofon_lesson_id_speaking' => [338],
            ],
            [
                'file' => "17",
                'description' => 'Английские выражения «as ... as» и «not so ... as». Слово «its».',
                'wordsKitId' => [365],
                'lingofon_lesson_id' => [339, 340],
                'lingofon_lesson_id_speaking' => [340],
            ],
            [
                'file' => "18",
                'description' => 'Притяжательный падеж в английском языке.',
                'wordsKitId' => [366],
                'lingofon_lesson_id' => [341, 342],
                'lingofon_lesson_id_speaking' => [342],
            ],
            [
                'file' => "19",
                'description' => 'Как узнать имя?',
                'wordsKitId' => [367],
                'lingofon_lesson_id' => [343, 344],
                'lingofon_lesson_id_speaking' => [344],
            ],
            [
                'file' => "20",
                'description' => 'Предлог «on» в английском языке.',
                'wordsKitId' => [368],
                'lingofon_lesson_id' => [345, 346],
                'lingofon_lesson_id_speaking' => [346],
            ],
            [
                'file' => "21",
                'description' => 'Как спросить «Сколько вам лет?» по английски.',
                'wordsKitId' => [369],
                'lingofon_lesson_id' => [348, 349],
                'lingofon_lesson_id_speaking' => [349],
            ],
            [
                'file' => "22",
                'description' => 'Слово «down» в английском языке. Буква «k» перед «n». Множественное число слов с 
                        окончанием «-f» или «-fe». Глаголы с предлогами наречиями или фразовые глаголы.',
                'wordsKitId' => [370],
                'lingofon_lesson_id' => [350, 351],
                'lingofon_lesson_id_speaking' => [351],
            ],
            [
                'file' => "23",
                'description' => 'Глаголы в неопределённой форме. Глаголы после «can». Глагол «can» в вопросительных 
                        предложениях. Отрицание с глаголом «can». Буква «w» перед «r». Выражение «at all». Наречие 
                        определяющее сказуемое.',
                'wordsKitId' => [371],
                'lingofon_lesson_id' => [352, 353],
                'lingofon_lesson_id_speaking' => [353],
            ],
            [
                'file' => "24",
                'description' => 'Глаголы «can», «may» и «must». "Слово «too». Словосочетания «to be in bed» и «Come 
                        to see me».',
                'wordsKitId' => [372],
                'lingofon_lesson_id' => [354, 355],
                'lingofon_lesson_id_speaking' => [355],
            ],
            [
                'file' => "25",
                'description' => 'Предлог «with» в английском языке.',
                'wordsKitId' => [373],
                'lingofon_lesson_id' => [356, 357],
                'lingofon_lesson_id_speaking' => [357],
            ],
            [
                'file' => "26",
                'description' => 'Конструкции «there is» и «there are» в английском языке. Местоимение «some».',
                'wordsKitId' => [374],
                'lingofon_lesson_id' => [358, 359],
                'lingofon_lesson_id_speaking' => [359],
            ],
            [
                'file' => "27",
                'description' => 'Прилагательные «many» и «much». Вопросительные предложения с «there is» и «there are». Местоимение «any».',
                'wordsKitId' => [375],
                'lingofon_lesson_id' => [360, 361],
                'lingofon_lesson_id_speaking' => [361],
            ],
            [
                'file' => "28",
                'description' => 'Артикль «the» перед уникальными предметами в английском языке.',
                'wordsKitId' => [376],
                'lingofon_lesson_id' => [362, 363],
                'lingofon_lesson_id_speaking' => [363],
            ],
            [
                'file' => "29",
                'description' => 'Артикль «the» перед уникальными предметами в английском языке.',
                'wordsKitId' => [377],
                'lingofon_lesson_id' => [364,],
                'lingofon_lesson_id_speaking' => [364],
            ],
            [
                'file' => "30",
                'description' => 'Будущее неопределённое время (Future Indefinite Tense) в английском языке.',
                'wordsKitId' => [378],
                'lingofon_lesson_id' => [365, 366],
                'lingofon_lesson_id_speaking' => [366],
            ],
            [
                'file' => "31",
                'description' => 'Сравнительная степень в английском языке. Союз «than». "Вопросы «What is he?» и 
                        «Who is he?»',
                'wordsKitId' => [379],
                'lingofon_lesson_id' => [367, 368],
                'lingofon_lesson_id_speaking' => [368],
            ],
            [
                'file' => "32",
                'description' => 'Предлог «out of». Глагол «leave». Настоящее неопределённое время (Present 
                        Indefinite Tense) в английском языке. Наречие «also».',
                'wordsKitId' => [380],
                'lingofon_lesson_id' => [369, 370],
                'lingofon_lesson_id_speaking' => [370],
            ],
            [
                'file' => "33",
                'description' => 'Существительное в роли прилагательного в английском языке.',
                'wordsKitId' => [381],
                'lingofon_lesson_id' => [371],
                'lingofon_lesson_id_speaking' => [371],
            ],
            [
                'file' => "34",
                'description' => 'Географические названия в английском языке.',
                'wordsKitId' => [382],
                'lingofon_lesson_id' => [372, 373],
                'lingofon_lesson_id_speaking' => [373],
            ],
            [
                'file' => "35",
                'description' => 'Существительные обозначающие национальности в английском языке. Словосочетание 
                        «they speak». Значение слова «short».',
                'wordsKitId' => [383],
                'lingofon_lesson_id' => [374, 375],
                'lingofon_lesson_id_speaking' => [375],
            ],
            [
                'file' => "36",
                'description' => 'Глаголы «can», «may» и «must».',
                'wordsKitId' => [384],
                'lingofon_lesson_id' => [376, 377],
                'lingofon_lesson_id_speaking' => [377],
            ],
            [
                'file' => "37",
                'description' => 'Дни недели в английском языке. Слово «any». Выражение «Let us ...».',
                'wordsKitId' => [385],
                'lingofon_lesson_id' => [378, 379],
                'lingofon_lesson_id_speaking' => [379],
            ],
            [
                'file' => "38",
                'description' => 'Притяжательные местоимения.',
                'wordsKitId' => [386],
                'lingofon_lesson_id' => [380, 381],
                'lingofon_lesson_id_speaking' => [381],
            ],
            [
                'file' => "39",
                'description' => 'Союз «till» означает «пока ... не», «до тех пор», «пока ... не». Наречие «very 
                        much».',
                'wordsKitId' => [387],
                'lingofon_lesson_id' => [382, 383],
                'lingofon_lesson_id_speaking' => [383],
            ],
        ];
    }

    protected static function fillLessonsName()
    {
        self::$lessonsName = [
            [
                'url' => 'introductory_english_lesson',
                'nameEn' => 'Introductory',
                'nameRu' => ['Вводный', 'вводного', 'вводному'],
            ],
            [
                'url' => 'first_english_lesson',
                'nameEn' => 'First',
                'nameRu' => ['Первый', 'первого', 'первому'],
            ],
            [
                'url' => 'second_english_lesson',
                'nameEn' => 'Second',
                'nameRu' => ['Второй', 'второго', 'второму'],
            ],
            [
                'url' => 'third_english_lesson',
                'nameEn' => 'Third',
                'nameRu' => ['Третий', 'третьего', 'третьему'],
            ],
            [
                'url' => 'fourth_english_lesson',
                'nameEn' => 'Fourth',
                'nameRu' => ['Четвёртый', 'четвёртого', 'четвертому'],
            ],
            [
                'url' => 'fifth_english_lesson',
                'nameEn' => 'Fifth',
                'nameRu' => ['Пятый', 'пятого', 'пятому'],
            ],
            [
                'url' => 'sixth_english_lesson',
                'nameEn' => 'Sixth',
                'nameRu' => ['Шестой', 'шестого', 'шестому'],
            ],
            [
                'url' => 'seventh_english_lesson',
                'nameEn' => 'Seventh',
                'nameRu' => ['Седьмой', 'седьмого', 'седьмому'],
            ],
            [
                'url' => 'eighth_english_lesson',
                'nameEn' => 'Eighth',
                'nameRu' => ['Восьмой', 'восьмого', 'восьмому'],
            ],
            [
                'url' => 'ninth_english_lesson',
                'nameEn' => 'Ninth',
                'nameRu' => ['Девятый', 'девятого', 'девятому'],
            ],
            [
                'url' => 'tenth_english_lesson',
                'nameEn' => 'Tenth',
                'nameRu' => ['Десятый', 'десятого', 'десятому'],
            ],
            [
                'url' => 'eleventh_english_lesson',
                'nameEn' => 'Eleventh',
                'nameRu' => ['Одиннадцатый', 'одиннадцатого', 'одиннадцатому'],
            ],
            [
                'url' => 'twelfth_english_lesson',
                'nameEn' => 'Twelfth',
                'nameRu' => ['Двенадцатый', 'двенадцатого', 'двенадцатому'],
            ],
            [
                'url' => 'thirteenth_english_lesson',
                'nameEn' => 'Thirteenth',
                'nameRu' => ['Тринадцатый', 'тринадцатого', 'тринадцатому'],
            ],
            [
                'url' => 'fourteenth_english_lesson',
                'nameEn' => 'Fourteenth',
                'nameRu' => ['Четырнадцатый', 'четырнадцатого', 'четырнадцатому'],
            ],
            [
                'url' => 'fifteenth_english_lesson',
                'nameEn' => 'Fifteenth',
                'nameRu' => ['Пятнадцатый', 'пятнадцатого', 'пятнадцатому'],
            ],
            [
                'url' => 'sixteenth_english_lesson',
                'nameEn' => 'Sixteenth',
                'nameRu' => ['Шестнадцатый', 'шестнадцатого', 'шестнадцатому'],
            ],
            [
                'url' => 'seventeenth_english_lesson',
                'nameEn' => 'Seventeenth',
                'nameRu' => ['Семнадцатый', 'семнадцатого', 'семнадцатому'],
            ],
            [
                'url' => 'eighteenth_english_lesson',
                'nameEn' => 'Eighteenth',
                'nameRu' => ['Восемнадцатый', 'восемнадцатого', 'восемнадцатому'],
            ],
            [
                'url' => 'nineteenth_english_lesson',
                'nameEn' => 'Nineteenth',
                'nameRu' => ['Девятнадцатый', 'девятнадцатого', 'девятнадцатому'],
            ],
            [
                'url' => 'twentieth_english_lesson',
                'nameEn' => 'Twentieth',
                'nameRu' => ['Двадцатый', 'двадцатого', 'двадцатому'],
            ],
            [
                'url' => 'twenty-first_english_lesson',
                'nameEn' => 'Twenty-first',
                'nameRu' => ['Двадцать первый', 'двадцать первого', 'двадцать первому'],
            ],
            [
                'url' => 'twenty-second_english_lesson',
                'nameEn' => 'Twenty-second',
                'nameRu' => ['Двадцать второй', 'двадцать второго', 'двадцать второму'],
            ],
            [
                'url' => 'twenty-third_english_lesson',
                'nameEn' => 'Twenty-third',
                'nameRu' => ['Двадцать третий', 'двадцать третьего', 'двадцать третьему'],
            ],
            [
                'url' => 'twenty-fourth_english_lesson',
                'nameEn' => 'Twenty-fourth',
                'nameRu' => ['Двадцать четвертый', 'двадцать четвертого', 'двадцать четвертому'],
            ],
            [
                'url' => 'twenty-fifth_english_lesson',
                'nameEn' => 'Twenty-fifth',
                'nameRu' => ['Двадцать пятый', 'двадцать пятого', 'двадцать пятому'],
            ],
            [
                'url' => 'twenty-sixth_english_lesson',
                'nameEn' => 'Twenty-sixth',
                'nameRu' => ['Двадцать шестой', 'двадцать шестого', 'двадцать шестому'],
            ],
            [
                'url' => 'twenty-seventh_english_lesson',
                'nameEn' => 'Twenty-seventh',
                'nameRu' => ['Двадцать седьмой', 'двадцать седьмого', 'двадцать седьмому'],
            ],
            [
                'url' => 'twenty-eighth_english_lesson',
                'nameEn' => 'Twenty-eighth',
                'nameRu' => ['Двадцать восьмой', 'двадцать восьмого', 'двадцать восьмому'],
            ],
            [
                'url' => 'twenty-ninth_english_lesson',
                'nameEn' => 'Twenty-ninth',
                'nameRu' => ['Двадцать девятый', 'двадцать девятого', 'двадцать девятому'],
            ],
            [
                'url' => 'thirtieth_english_lesson',
                'nameEn' => 'Thirtieth',
                'nameRu' => ['Тридцатый', 'тридцатого', 'тридцатому'],
            ],
            [
                'url' => 'thirty-first_english_lesson',
                'nameEn' => 'Thirty-first',
                'nameRu' => ['Тридцать первый', 'тридцать первого', 'тридцать первому'],
            ],
            [
                'url' => 'thirty-second_english_lesson',
                'nameEn' => 'Thirty-second',
                'nameRu' => ['Тридцать второй', 'тридцать второго', 'тридцать второму'],
            ],
            [
                'url' => 'thirty-third_english_lesson',
                'nameEn' => 'Thirty-third',
                'nameRu' => ['Тридцать третий', 'тридцать третьего', 'тридцать третьему'],
            ],
            [
                'url' => 'thirty-fourth_english_lesson',
                'nameEn' => 'Thirty-fourth',
                'nameRu' => ['Тридцать четвертый', 'тридцать четвертого', 'тридцать четвертому'],
            ],
            [
                'url' => 'thirty-fifth_english_lesson',
                'nameEn' => 'Thirty-fifth',
                'nameRu' => ['Тридцать пятый', 'тридцать пятого', 'тридцать пятому'],
            ],
            [
                'url' => 'thirty-sixth_english_lesson',
                'nameEn' => 'Thirty-sixth',
                'nameRu' => ['Тридцать шестой', 'тридцать шестого', 'тридцать шестому'],
            ],
            [
                'url' => 'thirty-seventh_english_lesson',
                'nameEn' => 'Thirty-seventh',
                'nameRu' => ['Тридцать седьмой', 'тридцать седьмого', 'тридцать седьмому'],
            ],
            [
                'url' => 'thirty-eighth_english_lesson',
                'nameEn' => 'Thirty-eighth',
                'nameRu' => ['Тридцать восьмой', 'тридцать восьмого', 'тридцать восьмому'],
            ],
            [
                'url' => 'thirty-ninth_english_lesson',
                'nameEn' => 'Thirty-ninth',
                'nameRu' => ['Тридцать девятый', 'тридцать девятого', 'тридцать девятому'],
            ],
        ];
    }
}