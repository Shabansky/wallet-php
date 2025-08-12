<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\TransactionStatus;
use App\TransactionType;

class Transaction extends Model
{
    protected $fillable = [
        'from',
        'to',
        'type',
        'amount',
    ];

    protected $casts = [
        'type' => TransactionType::class,
        'status' => TransactionStatus::class,
        'amount' => 'decimal:2',
    ];

    public function fromUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'from');
    }

    public function toUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'to');
    }
}
