<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Monografia extends Model
{
    use HasFactory;

    public $fillable = ['titulo', 'anyo'];

    public function articulos()
    {
        return $this->belongsToMany(Articulo::class);
    }

    public function autores()
    {
        $col = collect();

        foreach ($this->articulos as $articulo) {
            $col = $col->merge($articulo->autores);
        }

        return $col->unique('id');
    }
}
