<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Karyawan extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
    // public function pemegang()
    // {
    //     return $this->hasMany(Pemegang::class);
    // }
}
