<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\BootstrapPluginAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$this->registerCssFile('@web/css/services-listing.css', ['depends' => ['yii\bootstrap5\BootstrapAsset']]);


?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>" class="h-100">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody()?>

<header id="header">
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                    <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <?= Html::img(Yii::$app->request->baseUrl . '/images/motory-logo.svg', ["alt" => "motory logo"])?>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                        <li class="nav-item">
                        <a href="<?= Url::toRoute(['service-category/index']) ?>" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                            <i class="bi bi-grid fs-1 text-danger"></i>
                        </a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute(['service/index']) ?>" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="bi bi-car-front-fill fs-1 text-danger"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <div class="container">
                    <?php if (!empty($this->params['breadcrumbs'])): ?>
                        <?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']])?>
                    <?php endif?>
                    <?=Alert::widget()?>
                    <?=$content?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
