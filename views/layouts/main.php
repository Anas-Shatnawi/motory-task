<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

use yii\web\JqueryAsset;
use yii\helpers\Url;

JqueryAsset::register($this);
use yii\bootstrap5\BootstrapPluginAsset;
BootstrapPluginAsset::register($this);

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$this->registerCssFile('@web/css/services-listing.css');

$currentLanguage = Yii::$app->language;
$targetLanguage = ($currentLanguage == 'en-US') ? 'ar' : 'en-US';
$linkText = ($targetLanguage == 'ar') ? 'العربية' : 'English';
$languageChangeUrl = Url::to(['/service-list/change-language', 'language' => $targetLanguage]);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>" class="h-100">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
    <title><?= Html::encode(\Yii::t('app', $this->title)) ?></title>
    <?php $this->head()?>
</head>
<body class="d-flex flex-column h-100" dir="<?= Yii::$app->language == 'ar' ? 'rtl' : 'ltr' ?>">
<?php $this->beginBody()?>

<header id="header">
    <nav id="w0" class="navbar navbar-expand-md fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="/index.php">
                <?= Html::img(Yii::$app->request->baseUrl . '/images/motory-logo.svg', ["alt" => \Yii::t('app', 'motory logo')]) ?>
            </a>
            <ul id="w2" class="additional-items-container nav <?= Yii::$app->language == 'ar' ? '' : 'ltr' ?>">
                <li class="nav-item">
                    <a class="nav-link" href="/index.php?r=">
                        <div class="sell-car-container">
                            <div class="sell-car-header">
                                <div class="sell-car-title"><?= \Yii::t('app', 'sell'); ?></div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php?r=">
                        <div class="car-price-container mobile">
                            <div class="car-price-header">
                                <div class="car-price-title"><?= \Yii::t('app', 'Estimate'); ?></div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#w0-collapse" aria-controls="w0-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="w0-collapse" class="navbar-collapse collapse" style="">
                <ul id="w1" class="navbar-nav nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $languageChangeUrl ?>">
                            <div class="language-container">
                                <div class="language-text"><?= Html::encode($linkText) ?></div>
                                <div class="icon-container">
                                    <div class="icon">
                                        <?= Html::img(Yii::$app->request->baseUrl . '/images/lang.svg', ["alt" => Yii::t('app', 'language')]) ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item hide-on-mobile">
                        <a class="nav-link" href="/index.php?r=">
                            <div class="sell-car-container">
                                <div class="sell-car-header">
                                    <div class="sell-car-icon">
                                        <div class="icon-bar">
                                            <?= Html::img(Yii::$app->request->baseUrl . '/images/plus-icon.svg', ["alt" => \Yii::t('app', 'language')]) ?>
                                        </div>
                                    </div>
                                    <div class="sell-car-title"><?= \Yii::t('app', 'Sell Your Car'); ?></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item hide-on-mobile">
                        <a class="nav-link" href="/index.php?r=">
                            <div class="car-price-container">
                                <div class="car-price-header">
                                    <div class="car-price-icon">
                                        <div class="icon-bar">
                                            <?= Html::img(Yii::$app->request->baseUrl . '/images/calculator-icon.svg', ["alt" => \Yii::t('app', 'language')]) ?>
                                        </div>
                                    </div>
                                    <div class="car-price-title"><?= \Yii::t('app', 'Estimate the Price of Your Car'); ?></div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
