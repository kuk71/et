<?php

namespace app\models\db;

use Yii;
use yii\db\ActiveRecord;

class Lingofon extends ActiveRecord
{

    /**
     * Возвращает содержание урока
     *
     * @param array $lessonsId Список id уроков которые будут воспроизведены
     * @return void
     */
    public static function getLessonContent(array $lessonsId)
    {
        $query = self::createQueryLessonContent($lessonsId);

        return self::selectQuery($query);
    }

    /**
     * Возвращает описание урока
     *
     * @param int $lessonId id лингафонного урока
     * @return void
     */
    public static function getLessonDescription(int $lessonId)
    {
        $query = self::createQueryLessonDescription($lessonId);

        return self::selectQuery($query);
    }

    /**
     * Возвращает описание курса
     *
     * @param int $lingofonId id лингафонного курса
     * @return void
     */
    public static function getDescription(int $lingofonId)
    {
        $query = self::createQueryDescription($lingofonId);

        return self::selectQuery($query);
    }

    /**
     * Возвращает список доступных Лингафонных курсов
     *
     * @return array|ActiveRecord[]
     */
    public static function getLingofonList()
    {
        $query = self::createQueryLingofonList();

        return self::selectQuery($query);
    }

    /**
     * Возвращает список уроков лингафонного курса
     *
     * @param int $lingofonId
     * @return array|ActiveRecord[]
     */
    public static function getLessonList(int $lingofonId)
    {
        $query = self::createQueryLessonList($lingofonId);

        return self::selectQuery($query);
    }

    /**
     * Удаляет перевод для урока с id = $lessonId
     *
     * @param int $lessonId - id лингафонного урока из таблицы lingofon_lessons
     * @return bool - true - операция выполнена успешно
     * @throws \yii\db\Exception
     */
    public static function delTranslateLesson(int $lessonId)
    {
        $query = "
            DELETE FROM lingofon_translations 
                WHERE lingofon_content_id IN (
                    SELECT 
                        	lingofon_content_id
                        FROM
                            lingofon_contents
                        WHERE
                            lingofon_lesson_id = $lessonId
                )";

        Yii::$app->db->createCommand($query)->execute();

        return true;
    }

    /**
     * Удаляет оригинальный текст для урока с id = $lessonId
     *
     * @param int $lessonId - id лингафонного урока из таблицы lingofon_lessons
     * @return bool - true - операция выполнена успешно
     * @throws \yii\db\Exception
     */
    public static function delContentLesson(int $lessonId)
    {
        $query = "
            DELETE FROM lingofon_contents 
                WHERE
                    lingofon_lesson_id = $lessonId
                ";

        Yii::$app->db->createCommand($query)->execute();

        return true;
    }

    /**
     * Удаляет запись об уроке с id = $lessonId из таблицы lingofon_lessons
     *
     * @param int $lessonId - id лингафонного урока из таблицы lingofon_lessons
     * @return bool - true - операция выполнена успешно
     * @throws \yii\db\Exception
     */
    public static function delLesson(int $lessonId)
    {
        $query = "
            DELETE FROM lingofon_lessons
                WHERE
                    lingofon_lesson_id = $lessonId
                ";

        Yii::$app->db->createCommand($query)->execute();

        return true;
    }

    /**
     * Формирует текст запроса для выборки списка доступных лингафонных курсов
     *
     * @return string
     */
    private static function createQueryLingofonList()
    {
        return "
            SELECT
                    lingofon_id,
                    lingofon_name
                FROM
                    lingofons";
    }

    /**
     * Формирует текст запроса для выборки списка уроков лингафонного курса $lingofonId
     *
     * @param int $lingofonId
     * @return string
     */
    private static function createQueryLessonList(int $lingofonId)
    {
        return "
            SELECT
                    lingofon_lesson_id,
                    lingofon_lesson_num,
                    lingofon_lesson_name,
                    lingofon_lesson_duration_sec
                FROM
                    lingofon_lessons
                WHERE
                    lingofon_id = $lingofonId
                ORDER BY
                    lingofon_lesson_num ASC";
    }

    /**
     * Формирует текст запроса на выборку содержания урока
     *
     * @param array[int] $lessonsId
     * @return string
     */
    private static function createQueryLessonContent(array $lessonsId)
    {
        // заинтить все элементы массива
        array_walk($lessonsId, function (&$value) {
            $value = (int)$value;
        });

        // собрать элементы массива в строку
        $lessonsIdStr = implode(",", $lessonsId);
        $query = "
            SELECT
                    LL.lingofon_id,
                    LL.lingofon_lesson_num,
                    LL.lingofon_lesson_part,
                    LL.lingofon_lesson_id, 
                    LC.lingofon_content_num,
                    LC.lingofon_content,
                    LT.lingofon_translation
                FROM
                     lingofon_lessons AS LL
                        JOIN
                           lingofon_contents AS LC
                                ON (LL.lingofon_lesson_id = LC.lingofon_lesson_id) 
                        JOIN
                            lingofon_translations AS LT
                                ON (LC.lingofon_content_id = LT.lingofon_content_id)
                WHERE
                    LC.lingofon_lesson_id IN ($lessonsIdStr)
                ORDER BY
                    LL.lingofon_lesson_num ASC,                         
                    LC.lingofon_content_num ASC";

        return $query;
    }

    /**
     * Возвращает описание урока с id = $lessonId
     *
     * @param int $lessonId - id лингафонного урока
     * @return string
     */
    private static function createQueryLessonDescription(int $lessonId)
    {
        return "
            SELECT
                    *
                FROM
                     lingofon_lessons
                WHERE
                    lingofon_lesson_id = $lessonId";
    }

    /**
     * Возвращает описание курса с id = $lingofonId
     *
     * @param int $lingofonId - id лингафонного урока
     * @return string
     */
    private static function createQueryDescription(int $lingofonId)
    {
        return "
            SELECT
                    *
                FROM
                     lingofons
                WHERE
                    lingofon_id = $lingofonId";
    }

    /**
     * Возвращает массив разультатов запроса $query
     *
     * @param $query - sql запрос
     * @return array|ActiveRecord[]
     */
    private static function selectQuery($query)
    {
        return self::findBySql($query)
            ->asArray()
            ->all();
    }
}
