<?php

namespace App;

enum TransactionStatus: string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case FAILED = 'failed';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::COMPLETED => 'Completed',
            self::FAILED => 'Failed',
        };
    }

    public static function values(): array
    {
        return [
            self::PENDING->value,
            self::COMPLETED->value,
            self::FAILED->value,
        ];
    }
}
