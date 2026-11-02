<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
    use HasFactory;

    protected $table = 'bunga';
    protected $primaryKey = 'bunga_id';
    
    protected $fillable = [
        'kategori_id', // Tambahkan kolom foreign key ini
        'nama_bunga',
        'harga',
        'stok',
        'deskripsi'
    ];

    // Relasi Eloquent: Bunga milik satu Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }
}