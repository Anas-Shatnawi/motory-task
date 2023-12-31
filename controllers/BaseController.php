<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{

    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        $session = Yii::$app->session;
        !$session->isActive ? $session->open() : $session->close();
        Yii::$app->language = $session->get('language');
        $session->close();
        return true;
    }
}
