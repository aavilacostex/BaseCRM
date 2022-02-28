<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoles($user = null) {
        if (Auth::check())  {
            return(DB::table('laravel.users_roles')
            ->select('role_name')
            ->where('user_email', Auth::user()->email)
            ->get());
        }
        return route('login');
    }
    public function hasRole($role) {
        if (Auth::check())  {
            return(Auth::user()->getRoles()->contains('role_name',$role));
        }    
        return route('login');
    }

    public static function getByEmail($email) {
        return User::where('email', $email)->get();
    }
}
