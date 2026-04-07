<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hosting extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'description',
        'slug',
    ];

    public function plans(): HasMany
    {
        return $this->hasMany(HostingPlan::class);
    }
}
