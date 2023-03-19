<?php
namespace IRYAPay\Api;

use IRYAPay\Common\IRYAPayModel;

/**
 * Class Amount
 * @property double totalAmount
 * @property string currency
 *
 */
class Amount extends IRYAPayModel
{

    /**
     * @param  double  $amount
     * @return $this
     */
    public function setTotal($amount)
    {
        $this->totalAmount = $amount;
        return $this;
    }

    public function getTotal()
    {
        return $this->totalAmount;
    }

    /**
     * @param  string  $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

}
