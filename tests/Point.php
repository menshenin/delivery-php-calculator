<?php

namespace SimaLand\DeliveryCalculator\tests;

use SimaLand\DeliveryCalculator\PointInterface;

class Point implements PointInterface
{
    protected $params = [];

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function getDeliveryPricePerUnitVolume() : float
    {
        if (array_key_exists('delivery_price_per_unit_volume', $this->params)) {
            return $this->params['delivery_price_per_unit_volume'];
        }
        return 0.0;
    }
}
