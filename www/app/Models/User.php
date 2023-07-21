<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
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

    public function generateTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(10);
        $this->save();
    }
    public function resetTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->login_attempt = 0;
        $this->save();
    }
    public function getCreatedAtFormattedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y H:i');
    }
    public function getAccountReleaseTimeFormattedAttribute()
    {
        return !empty($this->account_locked_at) ? Carbon::parse($this->account_locked_at)->addMinute(config('constants.USER_LOCKED_MINUTES'))->format('Y-m-d H:i:s'): null;
    }
    public function getProfileImageAttribute()
    {
      if (file_exists(config('constants.USER_DOC_URL') . auth()->id() . DIRECTORY_SEPARATOR . $this->avatar)) {
        return config('constants.USER_DOC_URL') . auth()->id() . DIRECTORY_SEPARATOR . $this->avatar;
      } else {
        return asset('assets/images/default_profile.png');
      }
    }
}
