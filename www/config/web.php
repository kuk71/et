<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'Запоминатель',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language'=>'ru',
    'sourceLanguage'=>'ru',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '07z1A1VzDooXkDHRDkM2Ig3jNNQ2hKAz',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\db\UserList',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity', 'httpOnly' => true],
        ],
        'errorHandler' => [
            'errorAction' => '/main/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/registration' => '/user-management/registration',
                '/login' => '/user-management',
                '/logout' => '/user-management/logout',
                '/' => '/main',

                '/new-kit' => '/edit-study/create-study-kit',
                '/kit-fill' => '/edit-study',
                '/select-word-translation' => '/edit-study/select-word-couple',
                '/delete-word' => '/edit-study/delete-word-from-kit',
                '/delete-kit' => '/edit-study/delete-study-kit',
                '/study-kit' => '/study/study-kit',

                '/lingofon/lingofon_content_play' => '/lingofon/lingofon-content-play',

                '/study' => '/study/study',
                '/study/help_word_player' => '/study/help-word-player',
                '/learning_english_words/description' => '/study/description-method',
                '/learning_english_words' => '/study/index',
                '/learning_list_english_words' => '/study/list-public-words',

                '/skulte_anglijskij_dlya_detej' => '/course/skulte',
                '/lingofon' => '/course/lingofon',

                '/course/<courseName>' => '/course',
                '/course/<courseName>/<lesson>' => '/course',



                '/lingofon/help_lingofon_lesson_player' => '/lingofon/help-lingofon-lesson-player',
                '/lingofon/help_speaking_player' => '/lingofon/help-speaking-player',
                '/lingofon/metod_umin_zamyatkin' => '/lingofon/metod-umin-zamyatkin',

                [
                    'pattern' => '/lingofon/lesson_list',
                    'route' => '/course',
                    'defaults' => ['courseName' => 'linguaphone_institute_english_course_for_beginners',],
                ],
            ],
        ],
    ],
    'params' => $params,

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'allowedIPs' => ['*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'allowedIPs' => ['*'],
    ];
}

return $config;
