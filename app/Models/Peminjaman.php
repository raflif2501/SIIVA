<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Peminjaman extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    protected $table='peminjamans';
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
}
