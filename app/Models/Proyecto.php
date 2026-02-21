<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'titulo','slug','categoria','estado','ubicacion',
        'descripcion','contenido','imagen','banner',
        'metricas','galeria','aliados',
        'is_published','featured','orden',
    ];

    protected $casts = [
        'metricas'     => 'array',
        'galeria'      => 'array',
        'aliados'      => 'array',
        'is_published' => 'boolean',
        'featured'     => 'boolean',
        'orden'        => 'integer',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function booted(): void
    {
        static::saving(function (Proyecto $p) {
            if (blank($p->slug) && filled($p->titulo)) {
                $base = Str::slug($p->titulo);
                $slug = $base;
                $i = 2;

                while (static::where('slug', $slug)->where('id', '!=', $p->id)->exists()) {
                    $slug = $base . '-' . $i++;
                }
                $p->slug = $slug;
            }
        });
    }
}