<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = [
        'code',
        'name',
        'email',
        'phone',
        'address',
        'status',
        'branch_id',
        'created_by_id',
        'updated_by_id'
    ];
}
