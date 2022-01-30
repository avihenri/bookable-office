<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $with = ['organisation'];

    const SUPER_ADMIN = 'SUPER_ADMIN';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'organisation_id',
        'job_desc',
        'bio',
        'image_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function organisation() {
        return $this->belongsTo(Organisation::class);
    }

    /**
     * Get user role by identifier
     */
    public function loggedInUserHasRoleByIdentifier($identifier) {
        $user = auth()->user();
        foreach ($user->roles as $role) {
            if ($role->identifier == $identifier) {
                return true;
            }
        }
        return false;
    }

    /**
     * User is super admin
     */
    public function userIsSuperAdmin() {
        $superAdminRole = Role::where('identifier', self::SUPER_ADMIN)->first();
        return $this->hasRole($superAdminRole->id);
    }

    /**
     * RETURN ALL SUPER ADMINS
     */
    public static function allSuperAdmins() {
        return User::whereHas("roles", function($q){
            $q->where("identifier", self::SUPER_ADMIN);
        })->get();
    }
}
