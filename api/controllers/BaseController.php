<?php

namespace app\controllers;

use yii\filters\Cors;

class BaseController extends \yii\rest\Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        unset($behaviors['authenticator']);
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Origin' => ['http://localhost:8000'],
                'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                'Access-Control-Allow-Credentials' => true,
                'Access-Control-Max-Age' => 86400,
                'Access-Control-Allow-Headers' => ['Access-Control-Allow-Headers', 'Origin', 'Accept', 'X-Requested-With', 'X-Auth-Token', 'Content-Type', 'Access-Control-Request-Method', 'Access-Control-Request-Headers', 'Authorization', 'X-CSRF-Token']
            ]
        ];

        return $behaviors;
    }
}