<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partner_locator".
 *
 * @property int $id
 * @property string $company
 * @property string $status
 * @property string $logo
 * @property string $address
 * @property string $website
 * @property string $phone
 * @property string $countries_covered
 * @property string $states_covered
 */
abstract class PartnerLocatorBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partner_locator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company', 'status', 'logo', 'address', 'website', 'phone', 'countries_covered', 'states_covered'], 'required'],
            [['countries_covered', 'states_covered'], 'string'],
            [['company', 'status', 'logo', 'address', 'website'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company' => 'Company',
            'status' => 'Status',
            'logo' => 'Logo',
            'address' => 'Address',
            'website' => 'Website',
            'phone' => 'Phone',
            'countries_covered' => 'Countries Covered',
            'states_covered' => 'States Covered',
        ];
    }
}
