<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%search_queries}}`.
 */
class m240806_065315_create_search_queries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%search_queries}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%search_queries}}');
    }
}
