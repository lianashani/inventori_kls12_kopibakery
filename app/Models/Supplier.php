<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_supplier","alamat","no_telp"
        ];

        public function barang_masuk ()
        {
            return $this->hasMany("id_supplier","id");
        }

}
