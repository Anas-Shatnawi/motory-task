<?php
use yii\helpers\Html;
?>
<div class="service-container">
    <div class="track-bar">
        <div class="track-item">
            <div class="track-text"><?= \Yii::t('app', 'Motory Services'); ?></div>
        </div>
        <div class="separator">/</div>
        <div class="track-item">
            <div class="track-text"><?= \Yii::t('app', 'Home'); ?></div>
        </div>
    </div>
    <div class="main-page-container">
        <div class="service-list-container">
            <div class="service-list-header">
                <?= \Yii::t('app', 'Motory Services'); ?>
            </div>
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <div class="service-card-background">
                        <div class="background-circle">
                            <div class="background-circle-inner">
                                <div class="background-circle-inner-fill"><?=Html::img(Yii::$app->request->baseUrl . $service->icon, ['alt' => 'service'])?></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-card-content">
                        <div class="service-details">
                            <p class="service-description"><?= Yii::$app->language == 'ar' ?  Html::encode($service->category->a_name) : Html::encode($service->category->e_name) ?></p>
                            <h3 class="service-title"> <?= Yii::$app->language == 'ar' ?  Html::encode($service->a_name) : Html::encode($service->e_name)?></h3>
                        </div>
                        <div class="service-card-options">
                            <div class="option-details">
                                <div class="details-group">
                                    <div class="details-separator blue"></div>
                                    <div class="details-label">
                                        <div class="label-text"><?= \Yii::t('app', 'Service Price'); ?></div>
                                        <div class="price-currency">
                                            <div class="value-number"><?=Html::encode($service->price)?></div>
                                            <div class="value-text"><?= \Yii::t('app', 'SAR'); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="details-group">
                                    <div class="details-separator"></div>
                                    <div class="details-label">
                                        <div class="label-text"><?= \Yii::t('app', 'Warranty'); ?></div>
                                        <div class="value-text"><?= \Yii::t('app', 'YEARS'); ?> <?=Html::encode($service->warranty)?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="option">
                                <div class="option-button">
                                    <div class="button-text"><?= \Yii::t('app', 'Request Service Purchase'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="advertise-now-section">
            <div class="text-container">
                <div class="content-text content-text-2"><?= \Yii::t('app', 'Advertise Now on Motory.com'); ?></div>
                <div class="content-text content-text-2"><?= \Yii::t('app', 'Contact us at:'); ?><br> support@motory.com</div>
                <?=Html::img(Yii::$app->request->baseUrl . '/images/grey-motory-logo.svg', ["alt" => "Motory Logo"])?>
            </div>
        </div>
    </div>
</div>