<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<!-- <?php $form = ActiveForm::begin();?> -->
<!-- <?=$form->field($model, 'name')?> -->
<!-- <?=$form->field($model, 'email')?> -->

 <!-- <div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div> -->

<!-- <?php ActiveForm::end();?> -->
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
<div style="width: 1366px; height: 1172px; position: relative; background: white">
  <div style="width: 368px; height: 664px; left: 83px; top: 146px; position: absolute">
    <div style="width: 368px; height: 664px; left: 0px; top: 0px; position: absolute; opacity: 0.60; background: #F6F7F8"></div>
    <div style="width: 252px; height: 143px; left: 58px; top: 386px; position: absolute">
      <div style="width: 91.14px; height: 48px; left: 80px; top: 95px; position: absolute; opacity: 0.50">
        <div style="width: 89.62px; height: 13.11px; left: 0.71px; top: 34.63px; position: absolute; background: #8D96AB"></div>
        <div style="width: 89.90px; height: 47.24px; left: 0.57px; top: 0.16px; position: absolute">
          <div style="width: 89.90px; height: 33.05px; left: 0px; top: 0px; position: absolute">
            <div style="width: 37.17px; height: 23.88px; left: 52.72px; top: 9.08px; position: absolute; background: #8D96AB"></div>
            <div style="width: 19.31px; height: 22.83px; left: 30.53px; top: 10.02px; position: absolute; background: #8D96AB"></div>
            <div style="width: 12.43px; height: 16.15px; left: -0px; top: 8.90px; position: absolute; background: #8D96AB"></div>
            <div style="width: 16.89px; height: 16.38px; left: 13.43px; top: 9.26px; position: absolute; background: #8D96AB"></div>
            <div style="width: 6.63px; height: 10.39px; left: 5.83px; top: 22.66px; position: absolute; background: #8D96AB"></div>
            <div style="width: 3.53px; height: 5.50px; left: 5.83px; top: 27.54px; position: absolute; background: #8D96AB"></div>
            <div style="width: 6.62px; height: 10.39px; left: 44.96px; top: 0px; position: absolute; background: #8D96AB"></div>
            <div style="width: 3.53px; height: 5.50px; left: 44.96px; top: 4.89px; position: absolute; background: #8D96AB"></div>
          </div>
          <div style="width: 24.74px; height: 11.91px; left: 3.19px; top: 35.33px; position: absolute">
            <div style="width: 5.86px; height: 8.77px; left: -0px; top: 3.14px; position: absolute; background: white"></div>
            <div style="width: 5.71px; height: 6.82px; left: 6.70px; top: 2.97px; position: absolute; background: white"></div>
            <div style="width: 2.52px; height: 1.29px; left: 11.55px; top: 6.18px; position: absolute; background: white"></div>
            <div style="width: 2.52px; height: 1.29px; left: 13.21px; top: 6.18px; position: absolute; background: white"></div>
            <div style="width: 2.52px; height: 1.29px; left: 14.86px; top: 6.18px; position: absolute; background: white"></div>
            <div style="width: 5.47px; height: 7.48px; left: 16.51px; top: -0px; position: absolute; background: white"></div>
            <div style="width: 1.75px; height: 1.72px; left: 22.99px; top: 5.75px; position: absolute; background: white"></div>
          </div>
        </div>
      </div>
      <div style="width: 252px; left: 0px; top: 0px; position: absolute; text-align: center; color: #8D96AB; font-size: 14px; font-family: Almarai; font-weight: 400; line-height: 21px; word-wrap: break-word">أعلن الآن على موتري.كوم</div>
      <div style="width: 252px; left: 0px; top: 29px; position: absolute; text-align: center; color: #8D96AB; font-size: 14px; font-family: Almarai; font-weight: 400; line-height: 21px; word-wrap: break-word">تواصل معنا من خلال: support@motory.com</div>
    </div>
  </div>
  <div style="left: 491px; top: 198px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
    <div style="width: 792px; padding: 20px; border-radius: 20px; border: 1px #ECEDF1 solid; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: inline-flex">
        <div style="align-self: stretch; height: 64px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 8px; display: flex">
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">خدمات المساعدة والضمان</div>
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">المساعدة على الطريق (للسيارات الجديدة)</div>
        </div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-end; gap: 20px; display: inline-flex">
          <div style="width: 163px; padding-left: 16px; padding-right: 16px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; border: 1px #0083F9 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
            <div style="justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
              <div style="text-align: right; color: #0083F9; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">طلب شراء الخدمة</div>
            </div>
          </div>
          <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; display: flex">
            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">الضمان</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">3 سنوات</div>
                </div>
              </div>
              <div style="width: 1px; align-self: stretch; background: #D8DCE3"></div>
            </div>
            <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">سعر الخدمة</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">ريال</div>
                  <div style="text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">230</div>
                </div>
              </div>
              <div style="width: 2px; align-self: stretch; background: #0083F9"></div>
            </div>
          </div>
        </div>
      </div>
      <div style="width: 126px; height: 126px; position: relative">
        <div style="width: 126px; height: 126px; left: 126px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; opacity: 0.10; background: linear-gradient(45deg, #0083F9 0%, rgba(0, 131, 249, 0.20) 100%); border-radius: 16px"></div>
        <div style="width: 48px; height: 48px; left: 39px; top: 39px; position: absolute">
          <div style="width: 47.90px; height: 48px; left: 0.05px; top: -0px; position: absolute">
            <div style="width: 47.90px; height: 48px; left: 0px; top: 0px; position: absolute; background: #0083F9"></div>
            <div style="width: 7.30px; height: 2.81px; left: 32.28px; top: 33.03px; position: absolute; background: #0083F9"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 792px; padding: 20px; border-radius: 20px; border: 1px #ECEDF1 solid; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: inline-flex">
        <div style="align-self: stretch; height: 64px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 8px; display: flex">
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">خدمات المساعدة والضمان</div>
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">الضمان الممتد (للسيارات الجديدة)</div>
        </div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-end; gap: 20px; display: inline-flex">
          <div style="width: 163px; padding-left: 16px; padding-right: 16px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; border: 1px #0083F9 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
            <div style="justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
              <div style="text-align: right; color: #0083F9; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">طلب شراء الخدمة</div>
            </div>
          </div>
          <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; display: flex">
            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">الضمان</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">3 سنوات</div>
                </div>
              </div>
              <div style="width: 1px; align-self: stretch; background: #D8DCE3"></div>
            </div>
            <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">سعر الخدمة</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">ريال</div>
                  <div style="text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">1,725</div>
                </div>
              </div>
              <div style="width: 2px; align-self: stretch; background: #0083F9"></div>
            </div>
          </div>
        </div>
      </div>
      <div style="width: 126px; height: 126px; position: relative">
        <div style="width: 126px; height: 126px; left: 126px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; opacity: 0.10; background: linear-gradient(45deg, #0083F9 0%, rgba(0, 131, 249, 0.20) 100%); border-radius: 16px"></div>
        <div style="width: 48px; height: 48px; left: 39px; top: 39px; position: absolute">
          <div style="width: 48px; height: 48px; left: -0px; top: 0px; position: absolute">
            <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #0083F9"></div>
            <div style="width: 28.13px; height: 28.13px; left: 9.93px; top: 5.62px; position: absolute; background: #0083F9"></div>
            <div style="width: 13.02px; height: 8.16px; left: 17.49px; top: 15.61px; position: absolute; background: #0083F9"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 792px; padding: 20px; border-radius: 20px; border: 1px #ECEDF1 solid; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: inline-flex">
        <div style="align-self: stretch; height: 64px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 8px; display: flex">
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">خدمات المساعدة والضمان</div>
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">الضمان الممتد (للسيارات المستعملة)</div>
        </div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-end; gap: 20px; display: inline-flex">
          <div style="width: 163px; padding-left: 16px; padding-right: 16px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; border: 1px #0083F9 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
            <div style="justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
              <div style="text-align: right; color: #0083F9; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">طلب شراء الخدمة</div>
            </div>
          </div>
          <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; display: flex">
            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">الضمان</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">3 سنوات</div>
                </div>
              </div>
              <div style="width: 1px; align-self: stretch; background: #D8DCE3"></div>
            </div>
            <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">سعر الخدمة</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">ريال</div>
                  <div style="text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">1,610</div>
                </div>
              </div>
              <div style="width: 2px; align-self: stretch; background: #0083F9"></div>
            </div>
          </div>
        </div>
      </div>
      <div style="width: 126px; height: 126px; position: relative">
        <div style="width: 126px; height: 126px; left: 126px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; opacity: 0.10; background: linear-gradient(45deg, #0083F9 0%, rgba(0, 131, 249, 0.20) 100%); border-radius: 16px"></div>
        <div style="width: 48px; height: 48px; left: 39px; top: 39px; position: absolute">
          <div style="width: 48px; height: 48px; left: -0px; top: 0px; position: absolute">
            <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #0083F9"></div>
            <div style="width: 28.13px; height: 28.13px; left: 9.93px; top: 5.62px; position: absolute; background: #0083F9"></div>
            <div style="width: 13.02px; height: 8.16px; left: 17.49px; top: 15.61px; position: absolute; background: #0083F9"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 792px; padding: 20px; border-radius: 20px; border: 1px #ECEDF1 solid; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: inline-flex">
        <div style="align-self: stretch; height: 64px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 8px; display: flex">
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">خدمات الحماية</div>
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">الحماية القياسية</div>
        </div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-end; gap: 20px; display: inline-flex">
          <div style="width: 163px; padding-left: 16px; padding-right: 16px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; border: 1px #0083F9 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
            <div style="justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
              <div style="text-align: right; color: #0083F9; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">طلب شراء الخدمة</div>
            </div>
          </div>
          <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; display: flex">
            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">الضمان</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">10 سنوات</div>
                </div>
              </div>
              <div style="width: 1px; align-self: stretch; background: #D8DCE3"></div>
            </div>
            <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">سعر الخدمة</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">ريال</div>
                  <div style="text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">2,300</div>
                </div>
              </div>
              <div style="width: 2px; align-self: stretch; background: #0083F9"></div>
            </div>
          </div>
        </div>
      </div>
      <div style="width: 126px; height: 126px; position: relative">
        <div style="width: 126px; height: 126px; left: 126px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; opacity: 0.10; background: linear-gradient(45deg, #0083F9 0%, rgba(0, 131, 249, 0.20) 100%); border-radius: 16px"></div>
        <div style="width: 48px; height: 48px; left: 87px; top: 39px; position: absolute; transform: rotate(180deg); transform-origin: 0 0">
          <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; background: #0083F9"></div>
          <div style="width: 8.81px; height: 6.89px; left: -27.46px; top: 8.44px; position: absolute; background: #0083F9"></div>
        </div>
      </div>
    </div>
    <div style="width: 792px; padding: 20px; border-radius: 20px; border: 1px #ECEDF1 solid; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: inline-flex">
        <div style="align-self: stretch; height: 64px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 8px; display: flex">
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">خدمات الحماية</div>
          <div style="align-self: stretch; text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">الحماية الكاملة للسيارات السيدان</div>
        </div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-end; gap: 20px; display: inline-flex">
          <div style="width: 163px; padding-left: 16px; padding-right: 16px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; border: 1px #0083F9 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
            <div style="justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
              <div style="text-align: right; color: #0083F9; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">طلب شراء الخدمة</div>
            </div>
          </div>
          <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; display: flex">
            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">الضمان</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 16px; font-family: Almarai; font-weight: 400; line-height: 24px; word-wrap: break-word">10 سنوات</div>
                </div>
              </div>
              <div style="width: 1px; align-self: stretch; background: #D8DCE3"></div>
            </div>
            <div style="flex: 1 1 0; height: 50px; justify-content: flex-end; align-items: center; gap: 10px; display: flex">
              <div style="flex-direction: column; justify-content: flex-start; align-items: flex-end; display: inline-flex">
                <div style="text-align: right; color: #45567B; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">سعر الخدمة</div>
                <div style="justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                  <div style="text-align: right; color: #171D35; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">ريال</div>
                  <div style="text-align: right; color: #171D35; font-size: 21px; font-family: Almarai; font-weight: 700; line-height: 31.50px; word-wrap: break-word">10,350</div>
                </div>
              </div>
              <div style="width: 2px; align-self: stretch; background: #0083F9"></div>
            </div>
          </div>
        </div>
      </div>
      <div style="width: 126px; height: 126px; position: relative">
        <div style="width: 126px; height: 126px; left: 126px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; opacity: 0.10; background: linear-gradient(45deg, #0083F9 0%, rgba(0, 131, 249, 0.20) 100%); border-radius: 16px"></div>
        <div style="width: 48px; height: 48px; left: 87px; top: 39px; position: absolute; transform: rotate(180deg); transform-origin: 0 0">
          <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; transform: rotate(180deg); transform-origin: 0 0; background: #0083F9"></div>
          <div style="width: 8.81px; height: 6.89px; left: -27.46px; top: 8.44px; position: absolute; background: #0083F9"></div>
        </div>
      </div>
    </div>
  </div>
  <div style="width: 792px; left: 491px; top: 146px; position: absolute; text-align: right; color: #171D35; font-size: 24px; font-family: Almarai; font-weight: 700; line-height: 36px; word-wrap: break-word">خدمات موتري</div>
  <div style="left: 1152px; top: 96px; position: absolute; justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
    <div style="text-align: right; color: #8D96AB; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">خدمات موتري</div>
    <div style="text-align: right; color: #D8DCE3; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">/</div>
    <div style="text-align: right; color: #6A7791; font-size: 12px; font-family: Almarai; font-weight: 400; line-height: 18px; word-wrap: break-word">الرئيسية</div>
  </div>
  <div style="width: 1366px; height: 84px; left: 0px; top: 0px; position: absolute">
    <div style="width: 1366px; height: 84px; left: 0px; top: 0px; position: absolute; background: white"></div>
    <div style="width: 91px; height: 48px; left: 1192px; top: 16px; position: absolute">
      <div style="width: 91px; height: 48px; left: 0px; top: 0px; position: absolute"></div>
      <div style="width: 90.68px; height: 48px; left: 0px; top: 0px; position: absolute">
        <div style="width: 90.40px; height: 13.23px; left: 0.14px; top: 34.77px; position: absolute; background: #EC1D32"></div>
        <div style="width: 90.68px; height: 47.66px; left: 0px; top: 0px; position: absolute">
          <div style="width: 90.68px; height: 33.34px; left: 0px; top: 0px; position: absolute">
            <div style="width: 37.50px; height: 24.09px; left: 53.19px; top: 9.16px; position: absolute; background: #171D35"></div>
            <div style="width: 19.48px; height: 23.03px; left: 30.80px; top: 10.11px; position: absolute; background: #171D35"></div>
            <div style="width: 12.54px; height: 16.29px; left: 0px; top: 8.98px; position: absolute; background: #171D35"></div>
            <div style="width: 17.04px; height: 16.52px; left: 13.55px; top: 9.34px; position: absolute; background: #171D35"></div>
            <div style="width: 6.69px; height: 10.48px; left: 5.88px; top: 22.86px; position: absolute; background: #EC1D32"></div>
            <div style="width: 3.56px; height: 5.55px; left: 5.88px; top: 27.78px; position: absolute; background: #AD1E2E"></div>
            <div style="width: 6.68px; height: 10.48px; left: 45.35px; top: 0px; position: absolute; background: #171D35"></div>
            <div style="width: 3.56px; height: 5.55px; left: 45.35px; top: 4.93px; position: absolute; background: #171D35"></div>
          </div>
          <div style="width: 24.96px; height: 12.01px; left: 3.21px; top: 35.64px; position: absolute">
            <div style="width: 5.91px; height: 8.84px; left: 0px; top: 3.17px; position: absolute; background: white"></div>
            <div style="width: 5.76px; height: 6.88px; left: 6.76px; top: 3px; position: absolute; background: white"></div>
            <div style="width: 2.55px; height: 1.30px; left: 11.65px; top: 6.24px; position: absolute; background: white"></div>
            <div style="width: 2.55px; height: 1.30px; left: 13.32px; top: 6.24px; position: absolute; background: white"></div>
            <div style="width: 2.55px; height: 1.30px; left: 14.99px; top: 6.24px; position: absolute; background: white"></div>
            <div style="width: 5.52px; height: 7.54px; left: 16.66px; top: 0px; position: absolute; background: white"></div>
            <div style="width: 1.77px; height: 1.74px; left: 23.19px; top: 5.80px; position: absolute; background: white"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="padding-top: 11px; padding-bottom: 12px; padding-left: 24px; padding-right: 16px; left: 269px; top: 18px; position: absolute; border-radius: 8px; border: 1px #0083F9 solid; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 10px; display: inline-flex">
      <div style="justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
        <div style="text-align: right; color: #0083F9; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">بيع سيارتك</div>
        <div style="width: 20px; height: 20px; position: relative">
          <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute"></div>
          <div style="width: 14px; height: 14px; left: 3px; top: 3px; position: absolute; background: #0083F9"></div>
        </div>
      </div>
    </div>
    <div style="padding-top: 11px; padding-bottom: 12px; padding-left: 24px; padding-right: 16px; left: 83px; top: 18px; position: absolute; background: #0083F9; border-radius: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 10px; display: inline-flex">
      <div style="justify-content: flex-end; align-items: center; gap: 8px; display: inline-flex">
        <div style="text-align: right; color: white; font-size: 14px; font-family: Almarai; font-weight: 700; line-height: 21px; word-wrap: break-word">قدّر سعر سيارتك</div>
        <div style="width: 20px; height: 20px; position: relative">
          <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute"></div>
          <div style="width: 14px; height: 18px; left: 3px; top: 1px; position: absolute">
            <div style="width: 14px; height: 18px; left: 0px; top: 0px; position: absolute; background: white"></div>
            <div style="width: 1.56px; height: 1.64px; left: 3.11px; top: 6.55px; position: absolute; background: white"></div>
            <div style="width: 1.56px; height: 1.64px; left: 6.22px; top: 6.55px; position: absolute; background: white"></div>
            <div style="width: 1.56px; height: 1.64px; left: 9.33px; top: 6.55px; position: absolute; background: white"></div>
            <div style="width: 1.56px; height: 1.64px; left: 3.11px; top: 9.82px; position: absolute; background: white"></div>
            <div style="width: 1.56px; height: 1.64px; left: 6.22px; top: 9.82px; position: absolute; background: white"></div>
            <div style="width: 1.56px; height: 1.64px; left: 9.33px; top: 9.82px; position: absolute; background: white"></div>
            <div style="width: 1.56px; height: 1.64px; left: 6.22px; top: 13.09px; position: absolute; background: white"></div>
            <div style="width: 7.78px; height: 1.64px; left: 3.11px; top: 3.27px; position: absolute; background: white"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="left: 431px; top: 30px; position: absolute; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
      <div style="justify-content: flex-start; align-items: center; gap: 8px; display: flex">
        <div style="width: 16px; height: 16px; position: relative">
          <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute; background: #45567B"></div>
        </div>
        <div style="color: #45567B; font-size: 14px; font-family: Almarai; font-weight: 400; line-height: 21px; word-wrap: break-word">English</div>
      </div>
    </div>
    <div style="width: 1200px; height: 0px; left: 83px; top: 84px; position: absolute; border: 1px #ECEDF1 solid"></div>
  </div>
</div>