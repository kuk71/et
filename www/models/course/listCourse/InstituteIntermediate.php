<?php

namespace app\models\course\listCourse;

use app\models\course\LL;


/**
 * Модель для хранения данных об уроках по курсу Скульте
 *
 */
class InstituteIntermediate extends LL
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
                'description' => 'Безмятежная жизнь. A date for the theatre.',
                'wordsKitId' => [421],
                'lingofon_lesson_id' => [464],
            ],
            [
                'file' => "1",
                'description' => 'День для театра. A quiet life.',
                'wordsKitId' => [422],
                'lingofon_lesson_id' => [492],
            ],
            [
                'file' => "1",
                'description' => 'A picnic. Пикник.',
                'wordsKitId' => [423],
                'lingofon_lesson_id' => [493],
            ],
            [
                'file' => "1",
                'description' => 'Profile Peter Parker. Анкета Питера Паркера.',
                'wordsKitId' => [424],
                'lingofon_lesson_id' => [494],
            ],
            [
                'file' => "1",
                'description' => 'Holiday plans. Планы на отпуск.',
                'wordsKitId' => [425],
                'lingofon_lesson_id' => [495],
            ],
            [
                'file' => "1",
                'description' => 'The lost tie. Потерянный галстук',
                'wordsKitId' => [426],
                'lingofon_lesson_id' => [496],
            ],
            [
                'file' => "1",
                'description' => 'A road accident. Дорожное происшествие.',
                'wordsKitId' => [427],
                'lingofon_lesson_id' => [497],
            ],
            [
                'file' => "1",
                'description' => 'A little gossip. Маленькая сплетня.',
                'wordsKitId' => [428],
                'lingofon_lesson_id' => [507],
            ],
            [
                'file' => "1",
                'description' => 'A few errands. Несколько поручений.',
                'wordsKitId' => [429],
                'lingofon_lesson_id' => [517],
            ],
            [
                'file' => "1",
                'description' => 'Work and play. Работа и игра.',
                'wordsKitId' => [430],
                'lingofon_lesson_id' => [518],
            ],
            [
                'file' => "1",
                'description' => 'Career prospects. Карьерные перспективы.',
                'wordsKitId' => [431],
                'lingofon_lesson_id' => [521],
            ],
            [
                'file' => "1",
                'description' => 'Career prospects. Карьерные перспективы.',
                'wordsKitId' => [432],
                'lingofon_lesson_id' => [522],
            ],
            [
                'file' => "1",
                'description' => 'Career prospects. Карьерные перспективы.',
                'wordsKitId' => [433],
                'lingofon_lesson_id' => [523],
            ],
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
//            [
//                'url' => 'fourteenth_english_lesson',
//                'nameEn' => 'Fourteenth',
//                'nameRu' => ['Четырнадцатый', 'четырнадцатого', 'четырнадцатому'],
//            ],
//            [
//                'url' => 'fifteenth_english_lesson',
//                'nameEn' => 'Fifteenth',
//                'nameRu' => ['Пятнадцатый', 'пятнадцатого', 'пятнадцатому'],
//            ],
//            [
//                'url' => 'sixteenth_english_lesson',
//                'nameEn' => 'Sixteenth',
//                'nameRu' => ['Шестнадцатый', 'шестнадцатого', 'шестнадцатому'],
//            ],
//            [
//                'url' => 'seventeenth_english_lesson',
//                'nameEn' => 'Seventeenth',
//                'nameRu' => ['Семнадцатый', 'семнадцатого', 'семнадцатому'],
//            ],
//            [
//                'url' => 'eighteenth_english_lesson',
//                'nameEn' => 'Eighteenth',
//                'nameRu' => ['Восемнадцатый', 'восемнадцатого', 'восемнадцатому'],
//            ],
//            [
//                'url' => 'nineteenth_english_lesson',
//                'nameEn' => 'Nineteenth',
//                'nameRu' => ['Девятнадцатый', 'девятнадцатого', 'девятнадцатому'],
//            ],
//            [
//                'url' => 'twentieth_english_lesson',
//                'nameEn' => 'Twentieth',
//                'nameRu' => ['Двадцатый', 'двадцатого', 'двадцатому'],
//            ],
//            [
//                'url' => 'twenty-first_english_lesson',
//                'nameEn' => 'Twenty-first',
//                'nameRu' => ['Двадцать первый', 'двадцать первого', 'двадцать первому'],
//            ],
//            [
//                'url' => 'twenty-second_english_lesson',
//                'nameEn' => 'Twenty-second',
//                'nameRu' => ['Двадцать второй', 'двадцать второго', 'двадцать второму'],
//            ],
//            [
//                'url' => 'twenty-third_english_lesson',
//                'nameEn' => 'Twenty-third',
//                'nameRu' => ['Двадцать третий', 'двадцать третьего', 'двадцать третьему'],
//            ],
//            [
//                'url' => 'twenty-fourth_english_lesson',
//                'nameEn' => 'Twenty-fourth',
//                'nameRu' => ['Двадцать четвертый', 'двадцать четвертого', 'двадцать четвертому'],
//            ],
//            [
//                'url' => 'twenty-fifth_english_lesson',
//                'nameEn' => 'Twenty-fifth',
//                'nameRu' => ['Двадцать пятый', 'двадцать пятого', 'двадцать пятому'],
//            ],
//            [
//                'url' => 'twenty-sixth_english_lesson',
//                'nameEn' => 'Twenty-sixth',
//                'nameRu' => ['Двадцать шестой', 'двадцать шестого', 'двадцать шестому'],
//            ],
//            [
//                'url' => 'twenty-seventh_english_lesson',
//                'nameEn' => 'Twenty-seventh',
//                'nameRu' => ['Двадцать седьмой', 'двадцать седьмого', 'двадцать седьмому'],
//            ],
//            [
//                'url' => 'twenty-eighth_english_lesson',
//                'nameEn' => 'Twenty-eighth',
//                'nameRu' => ['Двадцать восьмой', 'двадцать восьмого', 'двадцать восьмому'],
//            ],
//            [
//                'url' => 'twenty-ninth_english_lesson',
//                'nameEn' => 'Twenty-ninth',
//                'nameRu' => ['Двадцать девятый', 'двадцать девятого', 'двадцать девятому'],
//            ],
//            [
//                'url' => 'thirtieth_english_lesson',
//                'nameEn' => 'Thirtieth',
//                'nameRu' => ['Тридцатый', 'тридцатого', 'тридцатому'],
//            ],
        ];
    }
}