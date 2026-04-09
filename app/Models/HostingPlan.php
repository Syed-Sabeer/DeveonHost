<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HostingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'hosting_id',
        'title',
        'badge',
        'description',
        'amount_per_month',
        'discount_percentage_annual',
        'features',
        'is_active',
        'stripe_product_id',
        'stripe_monthly_price_id',
        'stripe_annual_price_id',
    ];

    protected $casts = [
        'amount_per_month' => 'decimal:2',
        'discount_percentage_annual' => 'decimal:2',
        'features' => 'array',
        'is_active' => 'boolean',
    ];

    public function hosting(): BelongsTo
    {
        return $this->belongsTo(Hosting::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
