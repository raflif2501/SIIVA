<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Pengembalian extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
