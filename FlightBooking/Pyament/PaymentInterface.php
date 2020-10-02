<?php

namespace SystemDesign\Payment;

/**
 * Interface PaymentInterface
 * @package SystemDesign\Payment
 */
interface PaymentInterface
{
    /**
     * @param float $amount
     * @return bool
     */
    public function pay(float $amount): bool;
}