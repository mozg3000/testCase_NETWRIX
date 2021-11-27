<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%loc_country}}`.
 */
class m211127_112744_create_loc_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%loc_country}}', [
            'country_id' => $this->primaryKey(10)->unsigned(),
            'name' => $this->string()->notNull(),
            'short_name' => $this->string(50)->defaultValue(Null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%loc_country}}');
    }
}
