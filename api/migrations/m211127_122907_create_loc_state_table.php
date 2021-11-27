<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%loc_state}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%loc_country}}`
 */
class m211127_122907_create_loc_state_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%loc_state}}', [
            'state_id' => $this->primaryKey(10)->unsigned(),
            'name' => $this->string()->notNull(),
            'short_name' => $this->string(50)->defaultValue(null),
            'country_id' => $this->integer(10)->unsigned(),
        ]);

        // creates index for column `country_id`
        $this->createIndex(
            '{{%idx-loc_state-country_id}}',
            '{{%loc_state}}',
            'country_id'
        );

        // add foreign key for table `{{%loc_country}}`
        $this->addForeignKey(
            '{{%fk-loc_state-country_id}}',
            '{{%loc_state}}',
            'country_id',
            '{{%loc_country}}',
            'country_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%loc_country}}`
        $this->dropForeignKey(
            '{{%fk-loc_state-country_id}}',
            '{{%loc_state}}'
        );

        // drops index for column `country_id`
        $this->dropIndex(
            '{{%idx-loc_state-country_id}}',
            '{{%loc_state}}'
        );

        $this->dropTable('{{%loc_state}}');
    }
}
