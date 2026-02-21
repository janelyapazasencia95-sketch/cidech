<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index()
    {
        $projects = Proyecto::query()
            ->where('is_published', true)
            ->orderByDesc('featured')
            ->orderByRaw('orden IS NULL, orden ASC')
            ->latest()
            ->get();

        return view('proyectos.index', compact('projects'));
    }

    public function show(Proyecto $proyecto)
    {
        abort_unless($proyecto->is_published, 404);

        $related = Proyecto::query()
            ->where('is_published', true)
            ->where('id', '!=', $proyecto->id)
            ->when($proyecto->categoria, fn($q) => $q->where('categoria', $proyecto->categoria))
            ->orderByDesc('featured')
            ->latest()
            ->take(3)
            ->get();

        if ($related->count() < 3) {
            $extra = Proyecto::query()
                ->where('is_published', true)
                ->where('id', '!=', $proyecto->id)
                ->whereNotIn('id', $related->pluck('id'))
                ->latest()
                ->take(3 - $related->count())
                ->get();

            $related = $related->concat($extra);
        }

        return view('proyectos.show', compact('proyecto', 'related'));
    }
}