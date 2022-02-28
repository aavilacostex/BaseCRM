<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cemail extends Model
{
    public $timestamps = false;
    protected $table = 'emails';
    protected $primaryKey = 'id';
}
