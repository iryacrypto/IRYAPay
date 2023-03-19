<?php
namespace IRYAPay\Api;

use IRYAPay\Common\IRYAPayModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends IRYAPayModel
{

    /**
     * Valid Values: ["IRYAPay"]
     * method will be like IRYAPay, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
