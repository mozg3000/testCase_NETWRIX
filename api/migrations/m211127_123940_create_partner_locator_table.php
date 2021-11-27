<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%partner_locator}}`.
 */
class m211127_123940_create_partner_locator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%partner_locator}}', [
            'id' => $this->primaryKey(),
            'company' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
            'logo' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'website' => $this->string()->notNull(),
            'phone' => $this->string(40)->notNull(),
            'countries_covered' => $this->text(1000)->notNull(),
            'states_covered' => $this->text(1000)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%partner_locator}}');
    }
}
