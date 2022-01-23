<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DNSInfo extends Model
{
    use HasFactory;

    protected $table = 'd_n_s_infos';
    protected $fillable = [
        'domain',
        'ip'
    ];


}
