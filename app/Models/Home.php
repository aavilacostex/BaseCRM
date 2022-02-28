<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public $timestamps = false;
    protected $table = 'accounts';
    protected $primaryKey = 'account_id';
}
