<?php

namespace app\models;

class PartnerLocator extends PartnerLocatorBase
{
    const STATUS_MSP = 'MSP Partner';
    const STATUS_Preferred = 'Preferred Partner';
    const STATUS_Premium = 'Premium Partner';
    const STATUS_Elite = 'Elite Partner';
    const STATUS_Distributor = 'Distributor';

    public function fields()
    {
        return [
            'id',
            'company',
            'status',
            'logo',
            'address',
            'website',
            'phone',
            'countries_covered',
            'states_covered',
        ];
    }
}