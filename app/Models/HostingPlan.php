<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    ];

    protected $casts = [
        'amount_per_month' => 'decimal:2',
        'discount_percentage_annual' => 'decimal:2',
        'features' => 'array',
    ];

    public function hosting(): BelongsTo
    {
        return $this->belongsTo(Hosting::class);
    }
}
