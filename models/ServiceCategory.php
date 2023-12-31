<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_category".
 *
 * @property int $id
 * @property string|null $e_name
 * @property string|null $a_name
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Service[] $services
 */
class ServiceCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['e_name', 'a_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'e_name' => 'E Name',
            'a_name' => 'A Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::class, ['category_id' => 'id']);
    }
}
