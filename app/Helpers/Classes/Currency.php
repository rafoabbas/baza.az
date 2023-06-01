<?php

namespace App\Helpers\Classes;

class Currency
{
    public int|float $amount;

    public string $currency;

    public function convertTo(string $currency): float|int
    {
        $amount = $this->getAmount();

        if ($this->getCurrency() === 'EUR') {
            $amount = $amount / setting('EUR_RATE');
        }

        if ($this->getCurrency() === 'AZN') {
            $amount = $amount / setting('AZN_RATE');
        }

        if ($currency === 'USD') {
            $amount = $amount * setting('USD_RATE', 1);
        }

        if ($currency === 'EUR') {
            $amount = $amount * setting('EUR_RATE', 0.98);
        }

        if ($currency === 'AZN') {
            $amount = $amount * setting('AZN_RATE', 1.7);
        }

        return (float)$amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getAmount(): float|int
    {
        return $this->amount;
    }

    public function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }
}
