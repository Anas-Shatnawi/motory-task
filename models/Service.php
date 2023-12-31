<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $e_name
 * @property string|null $a_name
 * @property string|null $icon
 * @property float|null $price
 * @property string|null $warranty
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ServiceCategory $category
 */
class Service extends \yii\db\ActiveRecord

{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['e_name', 'a_name', 'warranty'], 'string', 'max' => 255],
            [['icon'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, svg'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ServiceCategory::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'e_name' => 'E Name',
            'a_name' => 'A Name',
            'icon' => 'Icon',
            'price' => 'Price',
            'warranty' => 'Warranty',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ServiceCategory::class, ['id' => 'category_id']);
    }
}
