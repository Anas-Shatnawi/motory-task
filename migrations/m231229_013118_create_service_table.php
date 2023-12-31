<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m231229_013118_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'e_name' => $this->string(255),
            'a_name' => $this->string(255),
            'icon' => $this->string(255),
            'price' => $this->decimal(10, 2),
            'warranty' => $this->string(255),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),

        ]);

        $this->addForeignKey(
            'fk-service-category_id',
            'service',
            'category_id',
            'service_category',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
