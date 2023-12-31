<?php

namespace app\controllers;

use app\models\Service;
use yii\data\Pagination;
use yii\web\Controller;
use app\controllers\BaseController;

use Yii;

class ServiceListController extends BaseController
{
    public function actionIndex()
    {
        $services = Service::find()->with('category')->all();

        return $this->render('index',['services'=>$services]);
    }

    public function actionChangeLanguage($language){
        $allowed_languages = ['ar', 'en-US'];
        $selected_language = in_array($language, $allowed_languages) ? $language : 'ar';
        $session = Yii::$app->session;
        !$session->isActive ? $session->open() : $session->close();
        $session->set('language', $selected_language);
        $session->close();

        return isset($_SERVER['HTTP_REFERER']) ? $this->redirect($_SERVER['HTTP_REFERER']) : $this->redirect(Yii::$app->homeUrl);
    }
}
