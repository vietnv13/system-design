<?php

namespace SystemDesign\Payment;

/**
 * Class MobileTransaction
 * @package SystemDesign\Payment
 */
class MobileTransaction implements PaymentInterface
{
    /**
     * @var string
     */
    private string $serviceProvider;

    /**
     * @var string
     */
    private string $phoneNumber;

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