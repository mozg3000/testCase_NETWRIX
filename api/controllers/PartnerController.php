<?php

namespace app\controllers;

use app\models\PartnerLocator;
use app\models\PartnerSearch;
use yii\rest\IndexAction;

class PartnerController extends BaseController
{
    public $modelClass = PartnerLocator::class;

    public function actions()
    {
        return [
            'index' => [
                'class' => IndexAction::class,
                'modelClass' => $this->modelClass,
                'prepareDataProvider' => [$this, 'prepareDataProvider']
            ]
        ];
    }

    protected function verbs()
    {
        return [
            'index' => ['GET']
        ];
    }

    public function prepareDataProvider() {

        $searchModel = new PartnerSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}