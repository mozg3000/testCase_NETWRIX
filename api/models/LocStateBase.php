<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loc_state".
 *
 * @property int $state_id
 * @property string $name
 * @property string|null $short_name
 * @property int|null $country_id
 *
 * @property LocCountry $country
 */
class LocStateBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loc_state';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['country_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['short_name'], 'string', 'max' => 50],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => LocCountry::className(), 'targetAttribute' => ['country_id' => 'country_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'State ID',
            'name' => 'Name',
            'short_name' => 'Short Name',
            'country_id' => 'Country ID',
        ];
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(LocCountry::className(), ['country_id' => 'country_id']);
    }
}
