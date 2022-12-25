<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Jambasangsang\Traits\updatableAndCreatable;

class BloodStockDetail extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = [
        'unit',
        'total',
        'balance',
        'blood_stock_id',
        'created_by_id',
        'updated_by_id'
    ];

    public function blood_stock(): BelongsTo
    {
        return $this->belongsTo(BloodStock::class, 'blood_stock_id', 'id');
    }
    
    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}