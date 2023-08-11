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
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'mobile',
        'two_factor_code',
        'two_factor_expires_at',
        'two_factor_code_resend',
        'two_factor_code_resend_attempt',
        'is_account_locked',
        'logins',
        'last_login_ip',
        'last_login_at',
        'account_locked_at',
        'login_attempt',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

}