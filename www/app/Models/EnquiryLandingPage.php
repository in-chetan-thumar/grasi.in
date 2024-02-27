<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnquiryLandingPage extends Model
{
    use HasFactory, CustomTimestamps, SoftDeletes;

    protected $table = "landing_enquiry_page";
    protected $primaryKey="id";

    protected $fillable = [
        'first_name',
        'last_name',
        'brand',
        'state',
        'city',
        'pincode',
        'mobile',
        'email',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

}
