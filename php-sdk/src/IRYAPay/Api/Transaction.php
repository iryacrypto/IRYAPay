<?php namespace IRYAPay\Api;

use IRYAPay\Common\IRYAPayModel;

/**
 * Class Transaction
 * @property \IRYAPay\Api\Amount amount
 *
 */

class Transaction extends IRYAPayModel
{

    /**
     * @param \IRYAPay\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}