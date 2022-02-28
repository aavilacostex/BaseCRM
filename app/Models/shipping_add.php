<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping_add extends Model
{
    public $timestamps = false;
    protected $table = 'shipping_adds';
    protected $primaryKey = 'id';
}
