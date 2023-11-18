<?php
// Хелпер сделан для тестирования прав доступа пользователя
// к операциям на сайте

namespace app\models\helpers;

use app\models\db\StudyKitList;

class UserAccess
{
    /**
     * Переадресует пользователя на главную страницу
     * если коллекция слов $kitId пользователю не принадлежит
     *
     * @param $kitId
     * @return bool
     */
    public static function redirectIfKitNotUser($kitId)
    {
        $userId = \Yii::$app->user->id;

        if (is_null($userId) || StudyKitList::isNotFindKitUser($userId, $kitId)) {
            // коллекция не принадлежит текущему пользователю
            \Yii::$app->response->redirect('/', 302)->send();
        }

        return true;
    }

    /**
     * Переадресует пользователя на главную страницу
     * если коллекция слов $kitId пользователю не принадлежит
     * или не принадлежит к публичной группе коллекций
     *
     *
     * @param $kitId
     * @return bool
     */
    public static function redirectIfKitNotUserOrPublic($kitId)
    {
        $userId = \Yii::$app->user->id;
        if (is_null($userId)) {
            $userId = -1;
        }

        if (StudyKitList::isNotFindKitUserOrPublic($userId, $kitId)) {
            // коллекция не принадлежит текущему пользователю или к группе публичных коллекций
            \Yii::$app->response->redirect('/', 302)->send();
        }

        return true;
    }
}
