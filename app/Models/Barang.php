<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Barang extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    public function bidang()
    {
        return $this->hasOne(Bidang::class);
    }
    public function kategori()
    {
        return $this->hasOne(Kategori::class);
    }
    public function peminjaman()
    {
        return $this->hasOne(Peminjaman::class);
    }
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
}
