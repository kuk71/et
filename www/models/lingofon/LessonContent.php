<?php

namespace app\models\lingofon;

use app\models\db\Lingofon;
use phpDocumentor\Reflection\Types\Integer;
use yii\base\Model;

/**
 * Модель для работы со страницей воспроизведения урока лингафонного курса
 */
class LessonContent extends Model
{
    /** @var int[] - Линейный массив id уроков с которыми идет работа */
    public $lessonsId;

    /** @var int - id лингафонного курса */
    public $lingofonId;

    /**
     * Возвращает содержание уроков лингафонного курса
     *
     * @return array|void|\yii\db\ActiveRecord[]
     */
    public function getContent()
    {
        return Lingofon::getLessonContent($this->lessonsId);
    }

    /**
     * Возвращает описание урока лингафонного курса
     *
     * @return array|void|\yii\db\ActiveRecord[]
     */
    public function getLessonDescription()
    {
        return Lingofon::getLessonDescription($this->lessonsId[0]);
    }

    /**
     * Возвращает описание лингафонного курса
     *
     * @return array|void|\yii\db\ActiveRecord[]
     */
    public function getDescription()
    {
        return Lingofon::getDescription($this->lingofonId);
    }

    /**
     *
     *
     * @return mixed
     */
    public function getLessonList() {
        return Lingofon::getLessonList($this->lingofonId);
    }

    /**
     * Возвращает список доступных лингафонных курсов
     *
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getLingofonList(){
        return Lingofon::getLingofonList();
    }

    /**
     * Полностью удаляет урок из базы
     *
     * @param int $lessonId - id удаляемого урока
     * @return void
     * @throws \yii\db\Exception
     */
    public static function delLesson(int $lessonId) {
        // удаление данных из таблицы с переводами
        Lingofon::delTranslateLesson($lessonId);

        // удаление данных из таблицы с оригинальным текстом
        Lingofon::delContentLesson($lessonId);

        // удаление записи об уроке
        // Lingofon::delLesson($lessonId);
    }
}