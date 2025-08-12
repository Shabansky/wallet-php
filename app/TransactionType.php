<?php

namespace App;

enum TransactionType: string
{
    case DEBIT = 'debit';
    case CREDIT = 'credit';

    public function label(): string
    {
        return match ($this) {
            self::DEBIT => 'Debit',
            self::CREDIT => 'Credit',
        };
    }

    public static function values(): array
    {
        return [
            self::DEBIT->value,
            self::CREDIT->value,
        ];
    }
}
