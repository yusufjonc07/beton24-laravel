<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'position',
        'profileImage',
        'passportNumber',
        'salary',
        'role',
        'workplaceId',
        'departmentId',
        'shiftId',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

     public function workplace()
     {
         return $this->belongsTo(Workplace::class, 'workplaceId');
     }

     public function department()
     {
         return $this->belongsTo(Department::class, 'departmentId');
     }

     public function fullname(){
         return $this->firstname . " ". $this->lastname;
     }


     public function getProfileImage(){

        $file_path = '/storage/'.$this->profileImage;


        if (file_exists(public_path($file_path))) {
            return asset($file_path);
        } else {
            return "https://api.dicebear.com/6.x/fun-emoji/svg?seed=".$this->fullname();
        }
     }
}
