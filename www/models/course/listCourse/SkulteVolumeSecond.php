<?php

namespace app\models\course\listCourse;

use app\models\course\LL;


/**
 * Модель для хранения данных об уроках по курсу Скульте
 *
 */
class SkulteVolumeSecond extends LL
{
    protected static function fillLessonsContent()
    {
        self::$lessonsContent = [
            [
                'file' => "0",
                'description' => 'Вводный урок ко второму тому учебника Валентины Скультэ Английский для детей. 
                    Особенности второго тома.',
            ],
            [
                'file' => "1",
                'description' => 'Сокращения в английском языке. Настоящее неопределённое время (Present Indefinite 
                    Tense). Личные местоимения. Предлог «в» для игр. Предлог «up». Предлог «with». Притяжательные 
                    местоимения. Дни недели и месяцы.',
                'wordsKitId' => [388],
                'lingofon_lesson_id' => [384, 385, 386, 387, 388, 389],
                'lingofon_lesson_id_speaking' => [385, 386, 387, 388, 389],
            ],
            [
                'file' => "2",
                'description' => 'Слово «what». Союз «that». Слова «good» и «well» в предложениях.',
                'wordsKitId' => [306],
                'lingofon_lesson_id' => [392, 488, 489, 490, 491],
                'lingofon_lesson_id_speaking' => [488, 489, 490, 491],
            ],
            [
                'file' => "3",
                'description' => 'Настоящее неопределённое время (Present Indefinite Tense) отрицательная и 
                    вопросительная форма предложений. Глагол «to do». Слово «often».',
                'wordsKitId' => [307],
                'lingofon_lesson_id' => [393, 498,499,500, 501,],
                'lingofon_lesson_id_speaking' => [498,499,500, 501,],
            ],
            [
                'file' => "4",
                'description' => 'Порядковые числительные. Усилительные местоимения. Глагол «have».',
                'wordsKitId' => [308],
                'lingofon_lesson_id' => [394, 502, 503, 504, 505, 506],
                'lingofon_lesson_id_speaking' => [502, 503, 504, 505, 506],
            ],
            [
                'file' => "5",
                'description' => 'Формы предложений в английском языке. Безличные предложения. Придаточные предложения. 
                    Деепричастие. Сказуемое перед подлежащим.',
                'wordsKitId' => [309],
                'lingofon_lesson_id' => [395, 508, 509,510,511, 512],
                'lingofon_lesson_id_speaking' => [508, 509,510,511, 512],
            ],
            [
                'file' => "6",
                'description' => 'Местоимение «any». Местоимение «one». Наречия. Личное местоимение «it».',
                'wordsKitId' => [310],
                'lingofon_lesson_id' => [396, 513, 514, 515, 516, ],
                'lingofon_lesson_id_speaking' => [513, 514, 515, 516, ],
            ],
            [
                'file' => "7",
                'description' => 'Сравнительная степень. Вопросительные предложения. Существительные из глаголов. 
                    Наречия неопределённого времени.',
                'wordsKitId' => [311],
                'lingofon_lesson_id' => [397],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "8",
                'description' => 'Годы в английском языке. Степени сравнения прилагательных. Отрицания в английских 
                    предложениях. Артикль «the» перед фамилиями. Артикли перед обращениями. «Me» вместо «I».',
                'wordsKitId' => [312],
                'lingofon_lesson_id' => [398],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "9",
                'description' => 'Дополнения в английских предложениях. Слово «hair». Вопрос «What time is it?».',
                'wordsKitId' => [313],
                'lingofon_lesson_id' => [399],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "10",
                'description' => 'Настоящее продолженное время (Present Continuous Tense). Глагол «to be» в разговорной 
                    речи. «How do you do?». Наречия «either» и «any». Специфичные выражения в английском языке.',
                'wordsKitId' => [314],
                'lingofon_lesson_id' => [400],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "11",
                'description' => 'Существительные в словосочетаниях. Префикс «un-». Глаголы оканчивающиеся на «-ie». 
                    Предлог «down». Слово «flesh». Суффикс  «-ly» в наречиях.',
                'wordsKitId' => [316],
                'lingofon_lesson_id' => [401],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "12",
                'description' => 'Слово «only». Местоимения «anything» и «something» в английских предложениях.',
                'wordsKitId' => [317],
                'lingofon_lesson_id' => [402],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "13",
                'description' => 'Глагол «taste». Частица «-self». Предлог «to». Наречие «back».',
                'wordsKitId' => [318],
                'lingofon_lesson_id' => [403],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "14",
                'description' => 'Причастия в английском языке. Сложные местоимения. Пальцы на руках и ногах.',
                'wordsKitId' => [319],
                'lingofon_lesson_id' => [404],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "15",
                'description' => 'Past Indefinite Tense (прошедшее неопределённое время). Обстоятельства в английских 
                    предложениях. Как будет по английски: «Я был у...»? Местоимение «who».',
                'wordsKitId' => [320],
                'lingofon_lesson_id' => [405],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "16",
                'description' => 'Множественное число. Особенности употребления слов «between» и  «among». Выражение 
                    «as if». «Правда», «не правда» в английском языке. Глагол «lie».',
                'wordsKitId' => [321],
                'lingofon_lesson_id' => [406],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "17",
                'description' => 'Герундий в английском языке. Условные предложения. Суффиксы имен прилагательных. 
                    Глагол «do» в утвердительных предложениях. Слово «news» и глаголы.',
                'wordsKitId' => [322],
                'lingofon_lesson_id' => [407],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "18",
                'description' => 'Past Continuous Tense (прошедшее продолженное время). Сочетание глаголов с 
                    прилагательными. Фразовые глаголы. Отрицания в английском языке. Обращение «sir».',
                'wordsKitId' => [323],
                'lingofon_lesson_id' => [408],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "19",
                'description' => 'Present Perfect Tense (настоящее совершённое время). Типы вопросов в английском языке. 
                    «Without» перед герундием. Значения слова «still». Предлог «for». Обозначение времени.',
                'wordsKitId' => [324],
                'lingofon_lesson_id' => [409],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "20",
                'description' => 'Past Perfect Tense (прошедшее совершённое время). Правило последовательности времён в 
                английском языке. Значения глагола «would». Сравнительная степень прилагательных. Употребление артиклей 
                с именами существительными. Союз «whether». Союз «as». Придаточные предложения.',
                'wordsKitId' => [325],
                'lingofon_lesson_id' => [410],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "21",
                'description' => 'Выражения «так», «так сильно», «очень» в английских предложениях. Глагол «must».',
                'wordsKitId' => [326],
                'lingofon_lesson_id' => [411],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "22",
                'description' => 'Множественное число.',
                'wordsKitId' => [327],
                'lingofon_lesson_id' => [412],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "23",
                'description' => 'Сокращения в разговорной речи. Глагол «make». Глагол «turn». Наречие «neither».',
                'wordsKitId' => [328],
                'lingofon_lesson_id' => [413],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "24",
                'description' => 'Предлог перед датами. Существительные без множественного числа. Артикль после 
                    местоимения «such».',
                'wordsKitId' => [329],
                'lingofon_lesson_id' => [414],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "25",
                'description' => 'Переходные глаголы. Сложные дополнения.',
                'wordsKitId' => [330],
                'lingofon_lesson_id' => [415],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "26",
                'description' => 'Слова «few» и «little».',
                'wordsKitId' => [331],
                'lingofon_lesson_id' => [416],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "27",
                'description' => 'Глагол «may».',
                'wordsKitId' => [332],
                'lingofon_lesson_id' => [417],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "28",
                'description' => 'Частица «ли».',
                'wordsKitId' => [333],
                'lingofon_lesson_id' => [418],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "29",
                'description' => 'Неопределённая форма глагола.',
                'wordsKitId' => [334],
                'lingofon_lesson_id' => [419],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "30",
                'description' => 'Слово «as».',
                'wordsKitId' => [335],
                'lingofon_lesson_id' => [420],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "31",
                'description' => 'Глагол «get». Местоимение «it». Обороты «there is» и «there are».',
                'wordsKitId' => [336],
                'lingofon_lesson_id' => [421],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "32",
                'description' => 'Слово «верёвка» в английском языке. Слово «pet». Слово «some». Конструкция «to be going». Глагол «manage».',
                'wordsKitId' => [337],
                'lingofon_lesson_id' => [422],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "33",
                'description' => 'Предлоги «owing» и «thanks». Слово «series». Ударение на глаголе. Предлоги после глаголов.',
                'wordsKitId' => [338],
                'lingofon_lesson_id' => [423],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "34",
                'description' => 'Выражение «хотелось бы» в английском языке.',
                'wordsKitId' => [339],
                'lingofon_lesson_id' => [424],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "35",
                'description' => 'Местоимение «it». Глагол «must».',
                'wordsKitId' => [340],
                'lingofon_lesson_id' => [425],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "36",
                'description' => 'Условные предложения нереального условия.',
                'wordsKitId' => [341],
                'lingofon_lesson_id' => [426],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "37",
                'description' => 'Местоимение «one».',
                'wordsKitId' => [342],
                'lingofon_lesson_id' => [427],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "38",
                'description' => 'Слова «sheep» и «deer».',
                'wordsKitId' => [343],
                'lingofon_lesson_id' => [428],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "39",
                'description' => 'Предлог «of». Прямые дополнения в предложениях.',
                'wordsKitId' => [344],
                'lingofon_lesson_id' => [429],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "40",
                'description' => 'Выражение «as usual». Артикли.',
                'wordsKitId' => [345],
                'lingofon_lesson_id' => [430],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "41",
                'description' => 'Глагол «have». Глагол «be». Частица «to».',
                'wordsKitId' => [346],
                'lingofon_lesson_id' => [431],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "42",
                'description' => 'Present Continuous Tense (настоящее продолженное время).',
                'wordsKitId' => [347],
                'lingofon_lesson_id' => [432],
                'lingofon_lesson_id_speaking' => [],
            ],
            [
                'file' => "43",
                'description' => 'Без теории.',
                'wordsKitId' => [348],
                'lingofon_lesson_id' => [433],
                'lingofon_lesson_id_speaking' => [],
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
                'nameRu' => ['', 'двенадцатого', 'двенадцатому'],
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
            [
                'url' => 'fortieth_english_lesson',
                'nameEn' => 'Fortieth',
                'nameRu' => ['Сороковой', 'сорокового', 'сороковому'],
            ],
            [
                'url' => 'forty-first_english_lesson',
                'nameEn' => 'Forty-first',
                'nameRu' => ['Сорок первый', 'сорок первого', 'сорок первому'],
            ],
            [
                'url' => 'forty-second_english_lesson',
                'nameEn' => 'Forty-second',
                'nameRu' => ['Сорок второй', 'сорок второго', 'сорок второму'],
            ],
            [
                'url' => 'forty-third_english_lesson',
                'nameEn' => 'Forty-third',
                'nameRu' => ['Сорок третий', 'сорок третьего', 'сорок третьему'],
            ],
        ];
    }
}
//],
//        'forty-third_english_lesson' => [
//    'num' => 43,
//    'nameEn' => 'Forty-third',
//    'nameRu' => ['Сорок третий', 'сорок третьего', 'сорок третьему'],
//    'lingofon_lesson_id' => 263,
//    'description' => 'Притяжательные местоимения.',
//],