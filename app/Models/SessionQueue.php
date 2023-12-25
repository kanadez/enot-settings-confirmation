<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionQueue extends Model
{
    use HasFactory;

    protected $table = 'sessions_queue';
}
