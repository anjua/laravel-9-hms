<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'website',
        'status',
        'created_by_id',
        'updated_by_id'
    ];
}
