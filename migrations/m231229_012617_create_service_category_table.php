<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service_category}}`.
 */
class m231229_012617_create_service_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service_category}}', [
            'id' => $this->primaryKey(),
            'e_name' => $this->string(255),
            'a_name' => $this->string(255),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service_category}}');
    }
}
