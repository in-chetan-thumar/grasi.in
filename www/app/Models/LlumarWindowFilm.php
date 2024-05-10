<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\CustomTimestamps;

class LlumarWindowFilm extends Model
{
    use HasFactory, CustomTimestamps, SoftDeletes;

    protected $table = "llumar_window_films";
    protected $primaryKey = "id";

    protected $fillable = [
        'first_name',
        'last_name',
        'project_type',
        'type_of_file',
        'company_name',
        'mobile',
        'whatsapp_number',
        'state',
        'email',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
