<?php

namespace SystemDesign\Payment;

/**
 * Class PayPal
 * @package SystemDesign\Payment
 */
class PayPal implements PaymentInterface
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $cardNumber;

    /**
     * @var string
     */
    private string $expired;

    /**
     * @param float $amount
     * @return bool
     */
    public function pay(float $amount): bool
    {
        // TODO: Implement pay() method.

        return true;
    }
}