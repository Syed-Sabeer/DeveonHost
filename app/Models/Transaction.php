<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hosting_plan_id',
        'hosting_id',
        'order_number',
        'stripe_customer_id',
        'stripe_subscription_id',
        'stripe_payment_intent_id',
        'stripe_invoice_id',
        'amount',
        'currency',
        'billing_cycle',
        'status',
        'payment_status',
        'payment_method',
        'starts_at',
        'renews_at',
        'meta',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'starts_at' => 'datetime',
        'renews_at' => 'datetime',
        'meta' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function hostingPlan(): BelongsTo
    {
        return $this->belongsTo(HostingPlan::class);
    }

    public function hosting(): BelongsTo
    {
        return $this->belongsTo(Hosting::class);
    }
}
