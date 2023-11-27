<?php

namespace app\models\course\listCourse;

use app\models\course\LL;


/**
 * Модель для хранения данных об уроках по курсу Скульте
 *
 */
class InstituteBeginner extends LL
{
    protected static function fillLessonsContent()
    {
        self::$lessonsContent = [
//            [
//                'file' => "0",
//                'description' => 'Как учить английский язык?',
//            ],
            [
                'file' => "1",
                'description' => 'Аэропорт. The airport.',
                'wordsKitId' => [391],
                'lingofon_lesson_id' => [434],

            ],
            [
                'file' => "1",
                'description' => 'Гостиница Бирдсли. The Beardsley hotel.',
                'wordsKitId' => [392],
                'lingofon_lesson_id' => [435],
            ],
            [
                'file' => "1",
                'description' => 'Наши номера. Our rooms.',
                'wordsKitId' => [393],
                'lingofon_lesson_id' => [436],
            ],
            [
                'file' => "1",
                'description' => "Газетный киоск. The newsagent's.",
                'wordsKitId' => [394],
                'lingofon_lesson_id' => [437],
            ],
            [
                'file' => "1",
                'description' => "Еда. Food.",
                'wordsKitId' => [395],
                'lingofon_lesson_id' => [438],
            ],
            [
                'file' => "1",
                'description' => "Осмотр доcтопримечательностей. Sightseeing.",
                'wordsKitId' => [396],
                'lingofon_lesson_id' => [439],
            ],
            [
                'file' => "1",
                'description' => "Банк и почта. The bank and the post office.",
                'wordsKitId' => [397],
                'lingofon_lesson_id' => [440],
            ],
            [
                'file' => "1",
                'description' => "Магазины. The shops.",
                'wordsKitId' => [398],
                'lingofon_lesson_id' => [441],
            ],
            [
                'file' => "1",
                'description' => "День рождения Саймона. Simon's birthday.",
                'wordsKitId' => [399],
                'lingofon_lesson_id' => [442],
            ],
            [
                'file' => "1",
                'description' => "Званый вечер. The party.",
                'wordsKitId' => [400],
                'lingofon_lesson_id' => [443],
            ],
            [
                'file' => "1",
                'description' => "Футбол. Football.",
                'wordsKitId' => [401],
                'lingofon_lesson_id' => [444],
            ],
            [
                'file' => "1",
                'description' => "Телефонные звонки. Telephone calls.",
                'wordsKitId' => [402],
                'lingofon_lesson_id' => [445],
            ],
            [
                'file' => "1",
                'description' => "Поездка. A journey.",
                'wordsKitId' => [403],
                'lingofon_lesson_id' => [446],
            ],
            [
                'file' => "1",
                'description' => "За городом. The country.",
                'wordsKitId' => [404],
                'lingofon_lesson_id' => [447],
            ],
            [
                'file' => "1",
                'description' => "Парикмахерская и химчистка. The hairdresser's and the cleaner's.",
                'wordsKitId' => [405],
                'lingofon_lesson_id' => [448],
            ],
            [
                'file' => "1",
                'description' => "Поздняя ночь. A late night.",
                'wordsKitId' => [406],
                'lingofon_lesson_id' => [449],
            ],
            [
                'file' => "1",
                'description' => "Приятный спокойный день. A nice quiet afternoon.",
                'wordsKitId' => [407],
                'lingofon_lesson_id' => [450],
            ],
            [
                'file' => "1",
                'description' => "На дискотеке. At a discotheque.",
                'wordsKitId' => [408],
                'lingofon_lesson_id' => [451],
            ],
            [
                'file' => "1",
                'description' => "Совещание по продажам. A sales conference.",
                'wordsKitId' => [409],
                'lingofon_lesson_id' => [452],
            ],
            [
                'file' => "1",
                'description' => "Достопримечательности в кембридже. Sightseeing in cambridge.",
                'wordsKitId' => [410],
                'lingofon_lesson_id' => [453],
            ],
            [
                'file' => "1",
                'description' => "Поездка в Сассекс. Going to Sussex.",
                'wordsKitId' => [411],
                'lingofon_lesson_id' => [454],
            ],
            [
                'file' => "1",
                'description' => "Как прошли выходные. Hearing about the weekend.",
                'wordsKitId' => [412],
                'lingofon_lesson_id' => [455],
            ],
            [
                'file' => "1",
                'description' => "Доктор. The doctor.",
                'wordsKitId' => [413],
                'lingofon_lesson_id' => [456],
            ],
            [
                'file' => "1",
                'description' => "Выгодные покупки. College.",
                'wordsKitId' => [414],
                'lingofon_lesson_id' => [457],
            ],
            [
                'file' => "1",
                'description' => "Колледж. Bargains.",
                'wordsKitId' => [415],
                'lingofon_lesson_id' => [458],
            ],
            [
                'file' => "26",
                'description' => "Грустный день Шейлы. A sad day for Sheila.",
                'lingofon_lesson_id' => [459],
            ],
            [
                'file' => "27",
                'description' => "Работа Питера. Peter's job.",
                'lingofon_lesson_id' => [460],
            ],
            [
                'file' => "28",
                'description' => "Новая работа. A new job.",
                'lingofon_lesson_id' => [461],
            ],
            [
                'file' => "29",
                'description' => "Новый дом. A new house.",
                'lingofon_lesson_id' => [462],
            ],
            [
                'file' => "30",
                'description' => "Отъезд из гостиницы. Leaving the hotel.",
                'lingofon_lesson_id' => [463],
            ],
//            [
//                'file' => "39",
//                'description' => 'Союз «till» означает «пока ... не», «до тех пор», «пока ... не». Наречие «very
//                        much».',
//                'wordsKitId' => [387],
//                'lingofon_lesson_id' => [382, 383],
//                'lingofon_lesson_id_speaking' => [383],
//            ],
        ];
    }

    protected static function fillLessonsName()
    {
        self::$lessonsName = [
//            [
//                'url' => 'introductory_english_lesson',
//                'nameEn' => 'Introductory',
//                'nameRu' => ['Вводный', 'вводного', 'вводному'],
//            ],
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
        ];
    }
}