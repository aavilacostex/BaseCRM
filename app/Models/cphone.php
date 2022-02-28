<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cphone extends Model
{
    public $timestamps = false;
    protected $table = 'phones';
    protected $primaryKey = 'id';
}
