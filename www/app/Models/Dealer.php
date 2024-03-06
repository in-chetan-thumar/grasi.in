<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dealer extends Model
{
    use HasFactory, CustomTimestamps, SoftDeletes;

    protected $table = "dealers";
    protected $primaryKey = "id";

    protected $fillable = [
        'sort_id',
        'dealership_name',
        'address',
        'state',
        'city',
        'pincode',
        'contact_name',
        'contact_number',
        'contact_email',
        'latitude',
        'longitude',
        'is_active',
        'url',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

}
